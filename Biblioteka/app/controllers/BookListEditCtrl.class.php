<?php
     namespace app\controllers;
    
    use core\App;
    use core\FunctionsDB;
    use core\Utils;
    use core\ParamUtils;
    use core\SessionUtils;
    
    use app\forms\BookListEditForm;

    class BookListEditCtrl {
        private $book;
        
        public function __construct() { $this->book = new BookListEditForm(); }
        
        public function getFromURL() {
            $this->book->id_book = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
            
            return !App::getMessages()->isError();
        }
        
        public function validateSave() {
            $this->book->id_book = ParamUtils::getFromRequest('id_book', true, 'Błędne wywołanie aplikacji');
            $this->book->book_code = ParamUtils::getFromRequest('book_code', true, 'Błędne wywołanie aplikacji');
            
            if (App::getMessages()->isError()){ return false; }
            
            if (empty(trim($this->book->id_book))) { Utils::addErrorMessage('Wprowadź kod książki'); }
            if (empty(trim($this->book->book_code))) { Utils::addErrorMessage('Wprowadź kod tytułu'); }
            
            if (App::getMessages()->isError()){ return false; }
            
            $exists = App::getDB()->has("book_stock", ["id_book" => $this->book->id_book]);     
            if($exists) { Utils::addErrorMessage('Książka już jest wprowadzona do bazy'); }
                
            $exists = App::getDB()->has("book_info", ["book_code" => $this->book->book_code]);     
            if(!$exists) { Utils::addErrorMessage('Nie ma podanego tytułu w bazie'); }
            
            if (App::getMessages()->isError()){ return false; }
             
            return !App::getMessages()->isError();
        }
        
        public function action_bookAdd() {
            $this->generateView();
        }
        
        public function action_bookDelete() {
            if ($this->getFromURL()) {
                try {
                    App::getDB()->delete("book_stock", [
                        "id_book" => $this->book->id_book
                    ]);
                    Utils::addInfoMessage('Usunięto książkę o kodzie '.$this->book->id_book.' z biblioteki');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                    if (App::getConf()->debug){ Utils::addErrorMessage($e->getMessage()); }
                }
            }
            App::getRouter()->redirectTo('bookList');
        }
        
        public function action_bookSave() {
            if ($this->validateSave()){
                try {
                    $title = FunctionsDB::getRecords("get", "book_info", null, "title", ["book_code" => $this->book->book_code]);
                    App::getDB()->insert("book_stock", [
                        "id_book" => $this->book->id_book,
                        "book_code" => $this->book->book_code,
                        "borrowed" => 0,
                        "id_employee" => SessionUtils::load("id_employee", true)
                        ]);
                    Utils::addInfoMessage('Dodano książkę "'. $title .'" o kodzie "'. $this->book->id_book .'" do bazy. Kod ISBN-13: "'.$this->book->book_code.'".');
                } catch (Exception $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas modyfikacji rekordów');
                    if (App::getConf()->debug){ Utils::addErrorMessage($e->getMessage()); }
                }
                
                App::getRouter()->forwardTo('bookAdd');
            }
            else{
                $this->generateView();              
            }    
        }
        
        public function generateView() {
            App::getSmarty()->assign('user', SessionUtils::loadObject("user", true));
            App::getSmarty()->assign('form', $this->book);
            
            App::getSmarty()->display('BookAdd.tpl');
        }
    }

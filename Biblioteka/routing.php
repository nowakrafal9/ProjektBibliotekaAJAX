<?php
    use core\App;
    use core\Utils;

    # Default routes
        App::getRouter()->setDefaultRoute('main');
        App::getRouter()->setLoginRoute('login');

        Utils::addRoute('main', 'MainCtrl', ['Pracownik', "Administrator"]);
    
    # Login/logout control
        Utils::addRoute('login', 'LoginCtrl');
        Utils::addRoute('logout', 'LoginCtrl');

    # Reader informations
        Utils::addRoute('readerList', 'ReaderCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('readerListData', 'ReaderCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('readerInfo', 'ReaderCtrl', ['Pracownik', "Administrator"]);
        
    # Reader edit/add 
        Utils::addRoute('readerAdd', 'ReaderEditCtrl', ["Administrator"]);
        Utils::addRoute('readerEdit', 'ReaderEditCtrl', ["Administrator"]);
        Utils::addRoute('readerSave', 'ReaderEditCtrl', ["Administrator"]);
    
    # Book informations  
        Utils::addRoute('titleList', 'BookCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('titleListData', 'BookCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('titleInfo', 'BookCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('bookList', 'BookCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('bookListData', 'BookCtrl', ['Pracownik', "Administrator"]);
    
    # Book edit/add
        Utils::addRoute('bookAdd', 'BookListEditCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('bookDelete', 'BookListEditCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('bookSave', 'BookListEditCtrl', ['Pracownik', "Administrator"]);

    # Borrowed book informations
        Utils::addRoute('borrowedList', 'BorrowedBooksCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('borrowedListData', 'BorrowedBooksCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('borrowedInfo', 'BorrowedBooksCtrl', ['Pracownik', "Administrator"]);
        
    # Return/borrow book
        Utils::addRoute('bookReturn', 'BorrowedBooksCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('bookBorrow', 'BookBorrowCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('BorrowBorrowerData', 'BookBorrowCtrl', ['Pracownik', "Administrator"]);
        Utils::addRoute('BorrowBookData', 'BookBorrowCtrl', ['Pracownik', "Administrator"]);
        
    # Employee accounts info
        Utils::addRoute('employeeList', 'EmployeeCtrl', ["Administrator"]);
        Utils::addRoute('employeeListData', 'EmployeeCtrl', ["Administrator"]);
        Utils::addRoute('employeeInfo', 'EmployeeCtrl', ["Administrator"]);
        
    # Employee add/edit
        Utils::addRoute('employeeAdd', 'EmployeeEditCtrl', ["Administrator"]);
        Utils::addRoute('employeeEdit', 'EmployeeEditCtrl', ["Administrator"]);
        Utils::addRoute('employeeSave', 'EmployeeEditCtrl', ["Administrator"]);
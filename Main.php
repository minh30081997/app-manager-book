<?php

require_once("./Doc.php");
require_once("./Book.php");
require_once("./Magazine.php");
require_once("./Newspaper.php");
require_once("./ManagerBook.php");

class Main
{
    public function main()
    {
        $managerBook = new ManageBook();

        while (true) {
            echo "Enter 1: Insert Document";
            echo "\n";
            echo "Enter 2: Delete Document";
            echo "\n";
            echo "Enter 3: List Document";
            echo "\n";
            echo "Enter 4: Search Document";
            echo "\n";
            echo "Enter 5: Exit!";
            echo "\n";

            $number = (int) trim(fgets(fopen("php://stdin", "r")));
            switch ($number) {
                case "1":
                    echo "Enter a: Insert Book";
                    echo "\n";
                    echo "Enter b: Insert Magazine";
                    echo "\n";
                    echo "Enter c: Insert Newspaper";
                    echo "\n";

                    $value = trim(fgets(fopen("php://stdin", "r")));

                    switch ($value) {
                        case "a":
                            echo "Code: ";
                            $code = (int) trim(fgets(fopen("php://stdin", "r")));
                            echo "Publishing Name: ";
                            $publishingName = trim(fgets(fopen("php://stdin", "r")));
                            echo "Release Copies Number: ";
                            $releaseCopiesNumber = (int) trim(fgets(fopen("php://stdin", "r")));
                            echo "Author Name: ";
                            $authorName = trim(fgets(fopen("php://stdin", "r")));
                            echo "Page Number: ";
                            $pageNumber = (int) trim(fgets(fopen("php://stdin", "r")));

                            $book = new Book($code, $publishingName, $releaseCopiesNumber, $authorName, $pageNumber);
                            $managerBook->addDoc($book);
                            $managerBook->listDoc();
                            break;

                        case "b":
                            echo "Code: ";
                            $code = (int) trim(fgets(fopen("php://stdin", "r")));
                            echo "Publishing Name: ";
                            $publishingName = trim(fgets(fopen("php://stdin", "r")));
                            echo "Release Copies Number: ";
                            $releaseCopiesNumber = (int) trim(fgets(fopen("php://stdin", "r")));
                            echo "Release Number: ";
                            $releaseNumber = (int) trim(fgets(fopen("php://stdin", "r")));
                            echo "Release Month: ";
                            $releaseMonth = (int) trim(fgets(fopen("php://stdin", "r")));

                            $magazine = new Magazine($code, $publishingName, $releaseCopiesNumber, $releaseNumber, $releaseMonth);
                            $managerBook->addDoc($magazine);
                            $managerBook->listDoc();
                            break;

                        case "c":
                            echo "Code: ";
                            $code = (int) trim(fgets(fopen("php://stdin", "r")));
                            echo "Publishing Name: ";
                            $publishingName = trim(fgets(fopen("php://stdin", "r")));
                            echo "Release Copies Number: ";
                            $releaseCopiesNumber = (int) trim(fgets(fopen("php://stdin", "r")));
                            echo "Release Day: ";
                            $releaseDay = (int) trim(fgets(fopen("php://stdin", "r")));

                            $newspaper = new Newspaper($code, $publishingName, $releaseCopiesNumber, $releaseDay);
                            $managerBook->addDoc($newspaper);
                            $managerBook->listDoc();
                            break;

                        default:
                            echo "Invalid!";
                            echo "\n";
                            break;
                    }
                    break;

                case "2":
                    echo "Code Delete: ";
                    $code = (int) trim(fgets(fopen("php://stdin", "r")));
                    $managerBook->deleteDoc($code);
                    $managerBook->listDoc();
                    break;

                case "3":
                    $managerBook->listDoc();
                    break;

                case "4":
                    echo "Code Search: ";
                    $code = (int) trim(fgets(fopen("php://stdin", "r")));
                    $managerBook->searchDoc($code);
                    break;
                
                case "5":
                    exit;
                
                default:
                    echo "Invalid!";
                    break;
            }
        }
    }
}

$main = new Main();

<?php
use PHPUnit\Framework\TestCase; 
require '../Model/add-book.php';
require '../Model/add-category.php';
require '../Model/add-author.php';
require '../Model/edit-category.php';
require '../Controller/login.php';



class Tests extends TestCase
{
    public function testAddBook()
    {
        $ad = new AddBook();
        $result = $ad->addBook();
        $this->assertStringContainsString("Book Added", $result);
    }
    public function testAddCategory()
    {
        $ad = new AddCategory();
        $result = $ad->addcat();
        $this->assertStringContainsString("Category Added", $result);
    }
    public function testAddAuthor()
    {
        $ad = new AddAuthor();
        $result = $ad->addAuthor();
        $this->assertStringContainsString("Author Added", $result);
    }
    public function testEditCategory()
    {
        $ad = new EditCategory();
        $result = $ad->editCategory();
        $this->assertStringContainsString("Updated Category", $result);
    }
    public function testLogin()
    {
        $ad = new Auth();
        $result = $ad->login('redwan', 'pass123');
        $this->assertTrue($result);
    }
    public function testSignup()
    {
        $ad = new Auth();
        $result = $ad->signup('redwan', 'pass123');
        $this->assertStringContainsString("Signed up!", $result);
    }
    public function testLogout()
    {
        $ad = new Auth();
        $result = $ad->logout('redwan');
        $this->assertStringContainsString("Logged out!", $result);
    }
}
?>
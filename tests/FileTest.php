<?php

use PHPUnit\Framework\TestCase;
use Unity\Support\File;

class FileTest extends TestCase
{
    protected $folder;

    protected function setUp()
    {
        parent::setUp();

        $dir = [
            'file.php' => '',
        ];

        $virtualFolder = \org\bovigo\vfs\vfsStream::setup('tmp', 444, $dir);

        $this->folder = $virtualFolder->url();
    }

    public function testExists()
    {
        $this->assertTrue(File::exists($this->folder));
        $this->assertFalse(File::exists(null));
    }

    public function testIsFile()
    {
        $file = $this->folder.DIRECTORY_SEPARATOR.'file.php';

        $this->assertTrue(File::isFile($file));
        $this->assertFalse(File::isFile(null));
    }

    public function testIsDir()
    {
        $this->assertTrue(File::isDir($this->folder));
        $this->assertFalse(File::isDir(null));
    }
}

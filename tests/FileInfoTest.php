<?php

use PHPUnit\Framework\TestCase;
use Unity\Support\FileInfo;

class FileInfoTest extends TestCase
{
    protected $folder;
    protected $fileInfo;

    protected function setUp()
    {
        parent::setUp();

        $dir = [
            'file.php' => '',
        ];

        $virtualFolder = \org\bovigo\vfs\vfsStream::setup('tmp', 444, $dir);

        $this->folder = $virtualFolder->url();

        $this->fileInfo = new FileInfo();
    }

    public function testName()
    {
        $this->assertEquals('file', $this->fileInfo->name('file.php'));
    }

    public function testBaseName()
    {
        $this->assertEquals('file.php', $this->fileInfo->baseName('file.php'));
    }

    public function testExt()
    {
        $this->assertEquals('php', $this->fileInfo->ext('file.php'));
    }

    public function testParentDir()
    {
        $this->assertEquals('folder', $this->fileInfo->parentDir('folder/file.php'));
    }
}

<?php
require_once "ICommand.php";
require_once "TextEditor.php";

class PasteCommand implements ICommand
{
    private $textEditor;
    private $text;

    public function __construct(TextEditor $textEditor, $text)
    {
        $this->textEditor = $textEditor;
        $this->text = $text;
    }

    public function execute()
    {
        $this->textEditor->setText($this->textEditor->getText() . $this->text);
    }
}

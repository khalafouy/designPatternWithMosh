<?php


namespace App\Course\Command\UndoCommandExample;


class main
{
    /**
     * main constructor.
     */
    public function __construct()
    {
        $htmlDocument = new HTMLDocument();
        $history = new History();

        $htmlDocument->setContent("Hello world");

        $boldCommand = new BoldDocumentCommand($htmlDocument, $history);
        $boldCommand->execute();
        echo $htmlDocument->getContent();
        echo "<br/>";

        $htmlDocument->setContent("Hello khalaf");
        $boldCommand = new BoldDocumentCommand($htmlDocument, $history);
        $boldCommand->execute();
        echo $htmlDocument->getContent();
        echo "<br/>";

        $undoCommand = new UndoCommand($history);
        $undoCommand->execute();
        echo $htmlDocument->getContent();
        echo "<br/>";

        $undoCommand = new UndoCommand($history);
        $undoCommand->execute();
        echo $htmlDocument->getContent();
        echo "<br/>";

    }
}
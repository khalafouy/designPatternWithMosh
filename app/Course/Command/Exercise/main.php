<?php


namespace App\Course\Command\Exercise;



class main
{

    /**
     * main constructor.
     */
    public function __construct()
    {
        $history = new History();
        $videoEditor = new VideoEditor();


        $textCommand = new TextCommand("Text 1 ",$videoEditor,$history);
        $textCommand->execute();
        dump($videoEditor->toString());



       // echo $videoEditor->getContrast();
        $contrastCommand = new ContrastCommand(1,$videoEditor,$history);
        $contrastCommand->execute();
        dump($videoEditor->toString());

        $contrastCommand = new ContrastCommand(2,$videoEditor,$history);
        $contrastCommand->execute();
        dump($videoEditor->toString());



       /* $textCommand = new TextCommand("Text 2 ",$videoEditor,$history);
        $textCommand->execute();
        dump($videoEditor->toString());*/


        $undoCommand = new UndoCommand($history);
        $undoCommand->execute();
        dump($videoEditor->toString());

        $undoCommand = new UndoCommand($history);
        $undoCommand->execute();
        dump($videoEditor->toString());
    }
}
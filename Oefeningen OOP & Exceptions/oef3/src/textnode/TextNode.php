<?php


namespace textnode;


class TextNode
{
    private $nextNode;
    private $text;
    private function __construct($text)
    {
        $this->nextNode = null;
        $this->text = $text;
// ... de eigenschap nextNode krijgt waarde null
// ... de eigenschap text krijgt een waarde
    }
    public static function makeNode($text)
    {
        $node = new TextNode($text);
        return $node;
// ... roep de constructor aan en geef dit object terug
    }
// de functie addNode voegt een TextNode toe op het einde van
//een keten van nodes
    public function addNode($text)
    {
// kijk of nextNode gelijk is aan null
// indien ja: maak een nieuwe node aan en ken die toe aan
//nextNode
        if($this->nextNode==null){
            $this->nextNode=self::makeNode($text);
        }
        else{
// indien nee: roep de methode addNode aan op nextNode
            $this->nextNode->addNode($text);
        }
    }
    public function printAll()
    {
        print($this->text);
        if($this->nextNode !=null){
            $this->nextNode->printAll();
        }
    }

    public function printTextNodeAt($i){
        if ($i < 0 || $i > strlen($this->nextNode)){
            for ($i = 0; $i <= strlen($this->nextNode); $i++){
                $this->printTextNodeAt($i);
            }
        }
    }
}
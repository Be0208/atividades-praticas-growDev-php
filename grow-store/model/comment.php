<?php
require_once('./utils/next_id.php');
require_once('./utils/formatStars.php');
require_once('./utils/timestamp.php');



class Comment
{
    private $id;
    private $createdAt;
    private $content;
    private $userId;
    private $productId;
    private $score;

    public function __construct($createdAtP, $contentP, $productIdP, $scoreP)
    {
        $this->id = createId();
        $this->createdAt = $createdAtP;
        $this->content = $contentP;
        $this->productId = $productIdP;
        $this->score = $scoreP;
    }

    public function add($commentData)
    {
        array_push($commentData, $this);
        return $commentData;
    }

    public function getId(){
        return $this->id;
    }

    public function update($newContent, $newScore)
    {
        $this->content = $newContent;
        $this->score = $newScore;
    }

    public static function show($idP, $commentData)
    {
        $filtered = array_values(array_filter($commentData, function ($item) use ($idP) {
            return $item->id == $idP; 
        })
    );
               
        if ($filtered) {
            echo "Conteúdo: " . $filtered[0]->content . "<br>";
            echo "Data: " . $filtered[0]->createdAt->format('d/m/Y H\hi\m') . "<br>";
            echo "Avaliação: " . $filtered[0]->score . "<br>";
            echo "ID:" . $filtered[0]->id . "<br>";
        
        } else {
            echo "Comentário não encontrado.";
        }
    }

    public function delete(&$commentData)
    {
        foreach ($commentData as $key => $comment) {
            if ($comment->id == $this->id) {
                unset($commentData[$key]);
                echo "Comentario escluido com sucesso \n";
                return true;
            }
        }
        return false;
    }

    public static function list($commentData)
    {
        echo "Lista de comentários<br><hr>";
        foreach ($commentData as $value) {
            echo "Conteúdo: " . $value->content . "<br>";
            echo "Data: " . $value->createdAt . "<br>";
            echo "Avaliação: " . $value->score . "<br>";
            echo "ID: " . $value->id . "<br> <hr>";
        }
    }
}
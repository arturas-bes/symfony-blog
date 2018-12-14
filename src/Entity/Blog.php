<?php
// src/Entity/Blog.php
 
namespace App\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="blog")
 * @ORM\HasLifecycleCallbacks
 */
class Blog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
 
    /**
     * @ORM\Column(type="string")
     */
    protected $title;
 
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $author;
 
    /**
     * @ORM\Column(type="text")
     */
    protected $blog;
 
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $image;
 
    /**
     * @ORM\Column(type="text")
     */
    protected $tags;
 
    protected $comments;
 
    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;
 
    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;



    public function getTitle()
    {
        return $this->title;
    }
  
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /********************** */
     public function getAuthor()
    {
        return $this->author;
    }
  
    public function setAuthor($author)
    {
        $this->author = $author;
    }
     /********************** */
       public function getBlog()
    {
        return $this->blog;
    }
  
    public function setBlog($blog)
    {
        $this->blog = $blog;
    }    
     /********************** */
    public function getImage()
    {
        return $this->image;
    }
  
    public function setImage($image)
    {
        $this->image = $image;
    }
    /********************** */
       public function getTags()
    {
        return $this->tags;
    }
  
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
     /********************** */
       public function getComment()
    {
        return $this->comments;
    }
  
    public function setComment($comments)
    {
        $this->comments = $comments;
    }
     /********************** */   

}
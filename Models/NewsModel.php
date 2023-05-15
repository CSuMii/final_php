<?php
namespace App\Models;
use CodeIgniter\Model;

class NewsModel extends Model{
    protected $table = 'news';
    protected $news = ['id','title','context_text','insertTime','updateTime'];
} 
?>
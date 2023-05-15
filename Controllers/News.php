<?php
namespace App\Controllers;
use App\Models\NewsModel;

class News extends BaseController{

    public function index(){
           
        $model = new NewsModel();
        $data = $model->findall();
        echo '<table border="2px solid black;" width="500px">';
        echo '<thead><tr><th>ID</th><th>Title</th><th>content</th></tr></thead>';
        foreach ($data as $row) {
            echo'<tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['title'].'</td>
                    <td>'.$row['content'].'</td>
                </tr>';
        }
        echo '</table>';

}
}

<?php 
namespace app\models;



use Yii;
use yii\base\Model;
use yii\helpers\Url;

use YoutubeDl\YoutubeDl;

class YoutubeDownloader extends Model {

    public $dl;

    public function init() {

        $this->dl = new YoutubeDl([
            'extract-audio' => true,
            'audio-format' => 'mp3',
            'audio-quality' => 0, // best
            'output' => '%(title)s.%(ext)s',
            'prefer-ffmpeg' => true,
            'ffmpeg-location' => '/usr/bin/ffmpeg'
        ]);

    }
    
    public function setDestination($destination) {
        $this->dl->setDownloadPath($destination);
    }

    public function download($ytLink) {
        $this->dl->download($ytLink);
    }

   /* public function getFileName() {
        return $this->dl->downloadPath;
    } */

}
    

?>
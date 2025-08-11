<?php
namespace DhananjayDev;
// class to practice static members functionality 
class AudioClip
{
    private static int $maxClipDurationSeconds = -1;

     static public function getMaxClipDurationSeconds(): int{
        return self:: $maxClipDurationSeconds;
     }

    private string $title;
    private int $durationSeconds = 0;

    public function __construct(string $title, int $durationSeconds)
    {
        $this->setTitle($title);
        $this->setDurationSeconds($durationSeconds);
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function getDurationSeconds(): int{
        return $this->durationSeconds;
    }

    public function setDurationSeconds(int $durationSeconds): void
    {
        if($durationSeconds < 0) return;

        $this->durationSeconds = $durationSeconds;
        
        if($durationSeconds > self::$maxClipDurationSeconds){
            self::$maxClipDurationSeconds = $durationSeconds;
        }
    }

    public function __toString(): string
    {
        return "(AudioClip) $this->title ($this->durationSeconds seconds) \n";
    }
}

?>
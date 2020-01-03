<?php
class Notification{
    private $title;
    private $message;
    private $image_url;
    private $sound;
    private $action;
    private $action_destination;
    private $data;
    
    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getImage_url()
    {
        return $this->image_url;
    }

    /**
     * @return mixed
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getAction_destination()
    {
        return $this->action_destination;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $image_url
     */
    public function setImage_url($image_url)
    {
        $this->image_url = $image_url;
    }

    /**
     * @param mixed $sound
     */
    public function setSound($sound)
    {
        $this->sound = $sound;
    }

    /**
     * @param mixed $action_destination
     */
    public function setAction_destination($action_destination)
    {
        $this->action_destination = $action_destination;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    function __construct(){
        
    }
    
    public function setTitle($title){
        $this->title = $title;
    }
    
    public function setMessage($message){
        $this->message = $message;
    }
    
    public function setImage($imageUrl){
        $this->image_url = $imageUrl;
    }
    
    public function setAction($action){
        $this->action = $action;
    }
    
    public function setActionDestination($actionDestination){
        $this->action_destination = $actionDestination;
    }
    
    public function setPayload($data){
        $this->data = $data;
    }
    
    public function getNotificatin(){
        $notification = array();
        $notification['title'] = $this->title;
        $notification['message'] = $this->message;
        $notification['image'] = $this->image_url;
        $notification['sound'] = $this->sound;
        $notification['action'] = $this->action;
        $notification['action_destination'] = $this->action_destination;
        return $notification;
    }
}
?>
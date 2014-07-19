<?php

class ShareLink
{
    
    private static $information = array(
        'url' => 'http://idea.sura-online.ru',
        'title' => 'Заголовок',
        'description' => 'Описание',
        'imageUrl' => '',
        'hashTags' => ''
    );
    
    
    public static function vkontakte()
    {
        $link = 'http://vkontakte.ru/share.php?'
                . 'url='.self::$information['url'].'&'
                . 'title='.self::$information['title'].'&'
                . 'description='.self::$information['description'].'&'
                . 'image='.self::$information['imageUrl'];
    
        return $link;
    }
    
    public static function facebook()
    {
        $link = 'http://www.facebook.com/sharer.php?s=100&'
                . 'p[title]='.self::$information['title'].'&'
                . 'p[summary]='.self::$information['description'].'&'
                . 'p[url]='.self::$information['url'].'&'
                . 'p[images][0]='.self::$information['imageUrl'];
  
        return $link;
    }
    
    public static function odnoklassniki()
    {
        $link = 'http://www.odnoklassniki.ru/dk?'
                . 'st.cmd=addShare&st.s=1&'
                . 'st.comments='.self::$information['description'].'&'
                . 'st._surl='.self::$information['url'];
        
        return $link;
    }
    
    public static function twitter()
    {
        $link = 'https://twitter.com/intent/tweet?'
                . 'text=c&'
                . 'url='.self::$information['url'].'&'
                . 'hashtags='.self::$information['hashTags'];
        
        return $link;
    }
    
    public static function livejournal()
    {
        $link = 'http://www.livejournal.com/update.bml?'
                . 'subject='.self::$information['title'].'&'
                . 'event='.self::$information['description'].'<br>'
                . '<a href=\''.self::$information['url'].'\'>Город Идей</a>&'
                . 'prop_taglist='.self::$information['hashTags'];

        return $link;
    }
    
    public static function googleplus()
    {
        $link = 'https://plus.google.com/share?'
                . 'url='.self::$information['url'].'&'
                . 'content='.self::$information['description'];
   
        return $link;
    }
    
}
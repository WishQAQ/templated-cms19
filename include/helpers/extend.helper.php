<?php  if(!defined('DEDEINC')) exit('dedecms');
/**
 * 扩展小助手
 *
 * @version        $Id: extend.helper.php 1 13:58 2010年7月5日Z tianya $
 * @package        DedeCMS.Helpers
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */

/**
 *  返回指定的字符
 *
 * @param     string  $n  字符ID
 * @return    string
 */
if ( ! function_exists('ParCv'))
{
    function ParCv($n)
    {
        return chr($n);
    }
}


/**
 *  显示一个错误
 *
 * @return    void
 */
if ( ! function_exists('ParamError'))
{
    function ParamError()
    {
        ShowMsg('对不起，你输入的参数有误！','javascript:;');
        exit();
    }
}

/**
 *  默认属性
 *
 * @param     string  $oldvar  旧的值
 * @param     string  $nv      新值
 * @return    string
 */
if ( ! function_exists('AttDef'))
{
    function AttDef($oldvar, $nv)
    {
        return empty($oldvar) ? $nv : $oldvar;
    }
}


/**
 *  返回Ajax头信息
 *
 * @return     void
 */
if ( ! function_exists('AjaxHead'))
{
    function AjaxHead()
    {
        @header("Pragma:no-cache\r\n");
        @header("Cache-Control:no-cache\r\n");
        @header("Expires:0\r\n");
    }
}

/**
 *  去除html和php标记
 *
 * @return     string
 */
if ( ! function_exists('dede_strip_tags'))
{
	function dede_strip_tags($str) { 
	    $strs=explode('<',$str); 
	    $res=$strs[0]; 
	    for($i=1;$i<count($strs);$i++) 
	    { 
	        if(!strpos($strs[$i],'>')) 
	            $res = $res.'&lt;'.$strs[$i]; 
	        else 
	            $res = $res.'<'.$strs[$i]; 
	    } 
	    return strip_tags($res);    
	} 
}

/**
 * 提取内容中的图片
 * @return array
 */
function slimg($str){
    $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/"; 
    preg_match_all($pattern,$str,$match);
    //var_dump($match[1]);
    if (!empty($match[1])) {
        $arraynum = count($match[1]);
        if ($arraynum < 3 ) {
            $num =  $arraynum;
        }
        else{
            $num = 3 ;
        }
        for ($i=0; $i < $num ; $i++) { 
            $resault .= "<li class=\"list_img_holder\" style=\"background: none;\"><img src=\"{$match[1][$i]}\"></li>";
        }
        return $resault;
    }
    else{
         return '';
    }
}


/**
 * 提取内容中的图片
 * @return array
 */
function slimg1($str,$arcurl){
    $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/"; 
    preg_match_all($pattern,$str,$match);
    //var_dump($match[1]);
    if (!empty($match[1])) {
        $arraynum = count($match[1]);
        if ($arraynum < 3 ) {
            $num =  $arraynum;
        }
        else{
            $num = 3 ;
        }
        for ($i=0; $i < $num ; $i++) { 
            $n = $i+1;
            $resault .= "<a target=\"_blank\" href=\"{$arcurl}\" class=\"thum3_{$n}\"> <img src=\"{$match[1][$i]}\" /></a>";
        }
        return $resault;
    }
    else{
         return '';
    }
}


if ( ! function_exists('getpic'))
{
	//提取内容中的图片
	function getpic($str){
			$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/"; 
			preg_match_all($pattern,$str,$match);
			if (!empty($match[1])) {
				return $match[1]['0'];
			}
			else{
				 return '';
			}
	}
}


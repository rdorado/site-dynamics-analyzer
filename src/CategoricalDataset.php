<?php
/**
 *
 * (c) Ruben Dorado <ruben.dorados@google.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SiteAnalyzer;
/**
 * class CategoricalDataset
 *
 * @package   SiteAnalyzer
 * @author    Ruben Dorado <ruben.dorados@gmail.com>
 * @copyright 2018 Ruben Dorado
 * @license   http://www.opensource.org/licenses/MIT The MIT License
 */
class CategoricalDataset
{

    /*
     * @param
     */    
    function setEncodedFeatures($array){
        $array = sort($array);
        $this->encodedValues = [];
        $this->sortedEncodedFeatures = $array;
        foreach($this->sortedEncodedFeatures as $feat){
            $vals = getUniqueValues($this->sortedEncodedFeatures, $feat);
            $this->encodedValues[] = $vals;
            $this->encodedFeatMapSize[$feat] = count($vals);
        }
    }   
    
    /*
     * @param
     */
    function getUniqueValues($feat){
        
    }
    
    /*
     * @param
     */  
    function encode(){
        $transformer  = [];
        $ndata = [];
        for ($j=0; $j<$ndim; $j++) {
            $transformer[] = function($val){ return $val; };
        }
        foreach( as $key => $val) {
            $transformer[$key] = function($val) { return $this->featEncode[$key][$val]; };
        }
        $ndata = [];
        for ($i=0; $i<$npoints; $i++) {
            $npoint = [];
            for ($j=0; $j<$ndim; $j++) {
                $npoint[] = $transformer[$j]($data[$i][$j]);
            }
            $ndata[] = $npoint;
        }
        $return $ndata;
    }
    
    /*
     * @param
     */  
    function decode($ndata){
        $resp = [];
        for ($i=0; $i<$npoints; $i++) {
            //$point = array_fill(0, $nexpdim; null);
            $point = array($ndata[$i]);
            foreach ( as $key => $val) {
                $this->featDecode[$key]($point);            
            }
            $point = $this->removeNulls($point);
            $resp[] = $point;
        }
        return $resp;
    }
    
}

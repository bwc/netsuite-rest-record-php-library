<?php
class NSRecord_Subsidiary extends RequestAbstract
{
   /**
    * GET /subsidiary
    * 
    * @param string $q                 
    * @param int $limit                
    * @param int $offset               
    * @param string enum(respond-async) $prefer
    * @return string json:subsidiaryCollection - List of records.
    * @response [default] nsError - Error response.
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null, $prefer = null)
    {
        $path = "/subsidiary";
        $args = $this->_argsToHttpParams(
            [
                'Prefer' => $prefer,
                'limit' => $limit,
                'offset' => $offset,
                'q' => $q,
            ]
        );

        return $this->_makeRequest('GET', $path, $args);
    }

   /**
    * GET /subsidiary/{id}
    * 
    * @param int $id [Required]        
    * @param bool $expandSubResources  
    * @param bool $simpleEnumFormat    
    * @param string $fields            
    * @param string enum(respond-async) $prefer
    * @return string json:subsidiary - Retrived record.
    * @response [default] nsError - Error response.
    */
    public function getRecord($id = null, $expandSubResources = null, $simpleEnumFormat = null, $fields = null, $prefer = null)
    {
        $path = "/subsidiary/$id";
        $args = $this->_argsToHttpParams(
            [
                'Prefer' => $prefer,
                'expandSubResources' => $expandSubResources,
                'fields' => $fields,
                'simpleEnumFormat' => $simpleEnumFormat,
            ]
        );

        return $this->_makeRequest('GET', $path, $args);
    }
}

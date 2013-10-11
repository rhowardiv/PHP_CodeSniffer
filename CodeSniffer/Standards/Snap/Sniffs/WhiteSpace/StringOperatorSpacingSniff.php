<?php
/**
 * Snap_Sniffs_WhiteSpace_StringOperatorSpacingSniff
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Mike Sherov <mike.sherov@gmail.com>
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class Snap_Sniffs_WhiteSpace_StringOperatorSpacingSniff extends Squiz_Sniffs_WhiteSpace_LogicalOperatorSpacingSniff
{

    /**
     * A list of tokenizers this sniff supports.
     *
     * @var array
     */
    public $supportedTokenizers = array(
                                   'PHP',
                                  );


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_STRING_CONCAT
        );
    }//end register()


}//end class

?>

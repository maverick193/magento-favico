<?php
/**
 * Cecropia Favico Extension
 *
 * NOTICE OF LICENSE
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @version     1.0.0
 * @category    Cecropia
 * @package     Cecropia_Favico
 * @author      Mohammed NAHHAS <m.nahhas@live.fr>
 * @copyright   Copyright (c) 2014 Mohammed NAHHAS
 * @licence     OSL - Open Software Licence 3.0
 *
 */

/**
 * Favico main block
 * @class Cecropia_Favico_Block_Main
 */

class Cecropia_Favico_Block_Main extends Mage_Core_Block_Template
{
    /**
     * Favico helper object
     *
     * @var Cecropia_Favico_Helper_Data
     */
    protected $_helper = null;

    /**
     * Get helper instance with lazy loading
     *
     * @return Cecropia_Favico_Helper_Data
     */
    protected function _getHelper()
    {
        if (is_null($this->_helper)) {
            $this->_helper = Mage::helper('cecropia_favico');
        }

        return $this->_helper;
    }

    /**
     * Return whether favicon notification is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_getHelper()->isEnabled();
    }

    /**
     * Get summary qty in cart
     *
     * @return int
     */
    public function getCartTotalQty()
    {
        return (int)Mage::getSingleton('checkout/cart')->getSummaryQty();
    }

    /**
     * Return background color
     *
     * @return string
     */
    public function getBgColor()
    {
        return $this->_getHelper()->getBackgroundColor();
    }

    /**
     * Return text color
     *
     * @return string
     */
    public function getTextColor()
    {
        return $this->_getHelper()->getTextColor();
    }

    /**
     * Return favicon shape
     *
     * @return string
     */
    public function getType()
    {
        return $this->_getHelper()->getType();
    }

    /**
     * Return font style
     *
     * @return string
     */
    public function getFontStyle()
    {
        return $this->_getHelper()->getFontStyle();
    }

    /**
     * Return font family
     *
     * @return string
     */
    public function getFontFamily()
    {
        return $this->_getHelper()->getFontFamily();
    }

    /**
     * Return favicon position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->_getHelper()->getPosition();
    }

    /**
     * Return favicon animation
     *
     * @return string
     */
    public function getAnimation()
    {
        return $this->_getHelper()->getAnimation();
    }
}
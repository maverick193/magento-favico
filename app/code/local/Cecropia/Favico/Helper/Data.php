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
 * Helper data
 * @class Cecropia_Favico_Helper_Data
 */

class Cecropia_Favico_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Favicon notification configuration
     */
    const XML_PATH_FAVICO_ENABLED       = 'favico/general/enabled';
    const XML_PATH_BACKGROUND_COLOR     = 'favico/general/bg_color';
    const XML_PATH_TEXT_COLOR           = 'favico/general/text_color';
    const XML_PATH_FONT_STYLE           = 'favico/general/font_style';
    const XML_PATH_TYPE                 = 'favico/general/type';
    const XML_PATH_POSITION             = 'favico/general/position';
    const XML_PATH_ANIMATION            = 'favico/general/animation';

    /**
     * Return whether favicon notification is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return (bool)Mage::getStoreConfig(self::XML_PATH_FAVICO_ENABLED);
    }

    /**
     * Return background color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        $bgColor = Mage::getStoreConfig(self::XML_PATH_BACKGROUND_COLOR);
        return $bgColor ? '#' . $bgColor : '#d00';
    }

    /**
     * Return text color
     *
     * @return string
     */
    public function getTextColor()
    {
        $textColor = Mage::getStoreConfig(self::XML_PATH_TEXT_COLOR);
        return $textColor ? '#' . $textColor : '#d00';
    }

    /**
     * Return font family
     *
     * @return string
     */
    public function getFontFamily()
    {
        return 'sans-serif';
    }

    /**
     * Return font style
     *
     * @return string
     */
    public function getFontStyle()
    {
        return Mage::getStoreConfig(self::XML_PATH_FONT_STYLE);
    }

    /**
     * Return favicon shape
     *
     * @return string
     */
    public function getType()
    {
        return Mage::getStoreConfig(self::XML_PATH_TYPE);
    }

    /**
     * Return favicon position
     *
     * @return string
     */
    public function getPosition()
    {
        return Mage::getStoreConfig(self::XML_PATH_POSITION);
    }

    /**
     * Return favicon animation
     *
     * @return string
     */
    public function getAnimation()
    {
        return Mage::getStoreConfig(self::XML_PATH_ANIMATION);
    }
}
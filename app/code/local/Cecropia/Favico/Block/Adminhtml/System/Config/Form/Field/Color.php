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
 * Color field block html
 * @class Cecropia_Favico_Block_Adminhtml_System_Config_Form_Field_Color
 */

class Cecropia_Favico_Block_Adminhtml_System_Config_Form_Field_Color
    extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /**
     * Override field method to add js
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return String
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {

        // Get the default HTML for this option
        $html = parent::_getElementHtml($element);

        if (!Mage::registry('jscolor')) {
            $html .= '
                <script type="text/javascript" src="' . $this->getJsUrl('jscolor/jscolor.js') . '"></script>
            ';
            Mage::register('jscolor', 1);
        }

        /*$html .= '
            <input class="color" value="66ff00">
        ';*/
        return $html;
    }
} 
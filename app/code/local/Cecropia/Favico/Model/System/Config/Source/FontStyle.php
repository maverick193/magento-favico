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
 * Font style source model
 * @class Cecropia_Favico_Model_System_Config_Source_FontStyle
 */

class Cecropia_Favico_Model_System_Config_Source_FontStyle
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options        = array();
        $stringOptions  = array('normal', 'italic', 'oblique', 'bold', 'bolder', 'lighter');
        $intOptions     = array('100', '200', '300', '400', '500', '600', '700', '800', '900');

        foreach ($stringOptions as $strOption) {
            $options[] = array('value' => $strOption, 'label' => ucwords($strOption));
        }

        foreach ($intOptions as $intOption) {
            $options[] = array('value' => $intOption, 'label' => ucwords($intOption));
        }

        return $options;
    }
}
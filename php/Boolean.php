<?php

/*****************************************************************************
 *                                                                           *
 * Boolean.php                                                               *
 * Copyright © 2017 Johnny Kirk.                                             *
 *                                                                           *
 * This file is part of semcap.                                              *
 *                                                                           *
 * semcap is free software: you can redistribute it and/or modify it under   *
 * the terms of the GNU General Public License as published by the Free      *
 * Software Foundation, either version 3 of the License, or (at your option) *
 * any later version.                                                        *
 *                                                                           *
 * semcap is distributed in the hope that it will be useful, but WITHOUT     *
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or     *
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for  *
 * more details.                                                             *
 *                                                                           *
 * You should have received a copy of the GNU General Public License along   *
 * with semcap. If not, see <http://www.gnu.org/licenses/>.                  *
 *                                                                           *
 *****************************************************************************/

    /**
     * Wrapper for boolean data types.
     * @author    Johnny Kirk <johnnykirk@outlook.com>
     * @copyright Copyright © 2017 Johnny Kirk
     * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU General
     *            Public License
     * @see       http://schema.org/Boolean
     * @since     0.1.0
     * @version   0.1.0
     */
    class Boolean extends DataType {

        /**
         * Getter for $value
         * @return bool | null primitive value of this Boolean, or null if not
         *                     set or not a boolean
         */
        public function getValue() {

            if(is_bool($this->value) && isset($this->value)) {

                return $this->value;

            } else {

                return null;

            }

        }

        /**
         * Setter for $value
         * Checks $valueNew is a boolean, is set and not null
         * @param bool $valueNew new primitive value for this Boolean
         */
        public function setValue(bool $valueNew) {

            if(is_bool($valueNew) && isset($valueNew)) {

                $this->value = $valueNew;

            } else {

                throw new InvalidArgumentException('Boolean expected.');

            }

        }

    }

?>

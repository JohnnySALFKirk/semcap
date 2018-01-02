<?php

/*****************************************************************************
 *                                                                           *
 * DataType.php                                                              *
 * Copyright © 2017-2018 Johnny Kirk.                                        *
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
     * Wrapper for basic data types
     * @author    Johnny Kirk <johnnykirk@outlook.com>
     * @copyright Copyright © 2017-2018 Johnny Kirk
     * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU General
     *            Public License
     * @see       http://schema.org/DataType
     * @since     0.1.0
     * @version   0.1.0
     */
    class DataType {

        //Protected Properties
        /**
         * @var mixed primitive value of this DataType
         */
        protected $value;

        //Public Methods
        /**
         * Getter for $value
         * @return mixed primitive value of this DataType
         */
        public function getValue() {

            if(isset($this->value)) {

                return $this->value;

            } else {

                return null;

            }

        }

        /**
         * Setter for $value
         * Checks $valueNew is set and not null
         * @param bool $valueNew new primitive value for this DataType
         */
        public function setValue($valueNew) {

            if(isset($valueNew)) {

                $this->value = $valueNew;

            } else {

                throw new InvalidArgumentException('Mixed value expected.');

            }

        }

    }

?>

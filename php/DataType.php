<?php

/*****************************************************************************
 *                                                                           *
 * DataType.php                                                              *
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
     * Wrapper for basic data types
     * @author    Johnny Kirk <johnnykirk@outlook.com>
     * @copyright Copyright © 2017 Johnny Kirk
     * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU General
     *            Public License
     * @see       http://schema.org/DataType
     * @since     0.1.0
     * @version   0.1.0
     */
    abstract class DataType {

        //Concrete Protected Properties
        /**
         * @var bool primitive value of this Boolean
         */
        protected $value;

        //Abstract Public Methods
        //Forces overrides in child classes
        abstract public function getValue();
        abstract public function setValue();

        //Concrete Public Methods
        /**
         * Printer for $value
         */
        public function printValue() {

            print $this->getValue();

        }

    }

?>

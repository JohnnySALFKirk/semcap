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

    abstract class DataType {

        //Abstract Protected Method Declarations
        abstract protected function getValue();
        abstract protected function setValue();

        //Concrete Public Method Declarations
        public function printValue() {

            print $this->getValue();

        }

    }

?>

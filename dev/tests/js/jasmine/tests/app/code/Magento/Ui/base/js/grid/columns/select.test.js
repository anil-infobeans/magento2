/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
/*eslint max-nested-callbacks: 0*/

define([
    'Magento_Ui/js/grid/columns/select'
], function (Select) {
    'use strict';

    describe('Ui/js/grid/columns/select', function () {
        var select;

        beforeEach(function () {
            select = new Select();
        });

        describe('getLabel method', function () {
            it('get label while options empty', function () {
                expect(select.getLabel(2)).toBe('');
            });
        });
    });
});

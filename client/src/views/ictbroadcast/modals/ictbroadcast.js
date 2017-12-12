/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2017 Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

Espo.define('views/ictbroadcast/modals/ictbroadcast', ['views/modal', 'model'], function (Dep, Model) {
  
 

    return Dep.extend({

        cssName: 'ictbroadcast-modal',

        template: 'ictbroadcast/modals/ictbroadcast',

        data: function () {
            return {
            };
        },

        setup: function () {
            this.buttonList = [
                {
                    name: 'ictbroadcast',
                    label: 'IctBroadcast',
                    style: 'danger'
                },
                {
                    name: 'cancel',
                    label: 'Cancel'
                }
            ];

            this.model = new Model();
            this.model.name = 'IctBroadcast';

            this.scope = this.options.scope;
	    
	  //  alert(this.scope);

            if (this.options.fieldList) {
                this.model.set('fieldList', this.options.fieldList);
                this.model.set('exportAllFields', false);
            } else {
                this.model.set('exportAllFields', true);
            }
            this.model.set('format', this.getMetadata().get('app.export.formatList')[0]);

            this.createView('record', 'views/ictbroadcast/record/record', {
                scope: this.scope,
                model: this.model,
                el: this.getSelector() + ' .record'
            });
        },

        actionIctbroadcast: function () {   
          var group_name = $('iframe[name=select_frame]').contents().find('#group_name').val();
          var campaign_name = $('iframe[name=select_frame]').contents().find('#c_type').val();
          var extention = $('iframe[name=select_frame]').contents().find('#extension').val();
          var message_id = $('iframe[name=select_frame]').contents().find('#message_id').val();
            

    



         //  var typ = $('iframe[name=select_frame]').contents().find($('#file_import')[0].files[0]);
 //alert(campaign_name);


          
            var data = this.getView('record').fetch();
            this.model.set(data);
            if (this.getView('record').validate()) return;

            var returnData = {
                exportAllFields: data.exportAllFields,
                format: [group_name,campaign_name,extention,message_id],
		// campaign_type:data.campaign_type,
		//  group:data.group
            };
            // alert(JSON.stringify(returnData));
	     
            if (!data.exportAllFields) {
	    //  alert("if");
	     //  alert(JSON.stringify(returnData));
                var attributeList = [];
                data.fieldList.forEach(function (item) {
                    if (item === 'id') {
                        attributeList.push('id');
                        return;
                    }
                    var type = this.getMetadata().get(['entityDefs', this.scope, 'fields', item, 'type']);
                    if (type) {;
                        this.getFieldManager().getAttributeList(type, item).forEach(function (attribute) {
                            attributeList.push(attribute);
			   
                        }, this);
			//var campaing = "campaign";
			 // attributeList[campaing].push(data.campaign_type);
                    }
                    if (~item.indexOf('_')) {
                        attributeList.push(item);
                    }
                }, this);
		
		//alert(returnData.fieldList);
		//alert(data.fieldList);
		// returnData.campaign_type = data.campaign_type;
		 // returnData.group = data.group;
                returnData.attributeList = attributeList;
                returnData.fieldList = data.fieldList;
		
            }

            this.trigger('proceed', returnData);
            this.close();
        }

    });
});


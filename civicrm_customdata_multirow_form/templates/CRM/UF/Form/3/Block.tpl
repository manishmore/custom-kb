{*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*}
{* Edit or display Profile fields, when embedded in an online contribution or event registration form. *}
{if ! empty( $fields )}
  {strip}
    <fieldset class="crm-profile crm-profile-id-13 crm-profile-name-">
  <legend>Honor of In Memory</legend>
  <div id="editrow-custom_5" class="crm-section editrow_custom_5-section form-item">
  <div class="content">
  {$form.custom_7.html}
  </div>
  <div class="clear"></div></div>
  <div id="editrow-custom_12" class="crm-section editrow_custom_12-section form-item">
  <div class="content">{$form.custom_12.html}</div>
  <div class="clear"></div></div>
  <div id="helprow-custom_12" class="crm-section helprow-custom_12-section">
  <div class="content description">Name of person or group you would like to recognize</div></div>
  <div id="editrow-custom_7" class="crm-section editrow_custom_7-section form-item">


  <div class="content">
  <label>Would you like us to send an e-mail or card on your behalf?</label>
  <br/>
  <table><tr> <td> <input type="radio" class="form-radio" checked="checked" name="custom_7" id="CIVICRM_QFID_1_8" value="1">
  <label for="CIVICRM_QFID_1_8">Yes</label></td>
  <td><label for="custom_10">Honoree’s mailing address: </label><input type="text" class="form-text" id="custom_10" name="custom_10"></td>
  </tr>
  <tr>
  <td></td>
  <td><label for="custom_9">Or Honoree’s e-mail address:</label><input type="text" class="form-text" id="custom_9" name="custom_9"></td>
  </tr></table>
   <div class="resizable-textarea">
  <span><textarea class="form-textarea textarea-processed" id="custom_8" name="custom_8" cols="5" rows="1"></textarea>
  </span>
  </div>
  <div class="content description">Personal message you would like to include</div>
  &nbsp;<input type="radio" class="form-radio" name="custom_7" id="CIVICRM_QFID_2_10" value="2">
  <label for="CIVICRM_QFID_2_10">No</label></div>
  <div class="clear"></div></div>
  <div class="content">
  </div>
  <div class="clear">
  </div></div>

  <div id="editrow-custom_11" class="crm-section editrow_custom_11-section form-item">
  <div class="content">
  <label>Would you like your gift to be included on the list of Campaign Supporters on the webpage for this campaign?</label>
  <br/>
  <input type="radio" class="form-radio" name="custom_11" id="CIVICRM_QFID_1_12" value="1">
  <label for="CIVICRM_QFID_1_12">Yes, include my name, gift amount, and message</label><br/>&nbsp;
  <input type="radio" class="form-radio" name="custom_11" id="CIVICRM_QFID_2_14" value="2">
  <label for="CIVICRM_QFID_2_14">Yes, include my name and gift amount only</label>
  <br/>&nbsp;<input type="radio" class="form-radio" name="custom_11" id="CIVICRM_QFID_3_16" value="3">
  <label for="CIVICRM_QFID_3_16">Yes, include my gift amount and message but keep my name anonymous</label>
  <br/>&nbsp;<input type="radio" class="form-radio" name="custom_11" id="CIVICRM_QFID_4_18" value="4">
  <label for="CIVICRM_QFID_4_18">No, do not include my gift on the list of Campaign Supporters</label></div>
  <div class="clear"></div></div>
  </fieldset>
  {/strip}

{/if} {* fields array is not empty *}

{literal}
<script type="text/javascript">
  cj(function(){
    cj('#selector tr:even').addClass('odd-row ');
    cj('#selector tr:odd ').addClass('even-row');
  });
</script>
{/literal}



<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce.com
 * *********************************************************************************** */

class Calendar_Export_View extends Vtiger_Export_View
{

	/**
	 * Preprocess
	 * @param Vtiger_Request $request
	 * @param boolean $display
	 */
	public function preprocess(Vtiger_Request $request, $display = true)
	{
		
	}

	/**
	 * Process
	 * @param Vtiger_Request $request
	 */
	public function process(Vtiger_Request $request)
	{
		$moduleName = $request->getModule();

		$viewer = $this->getViewer($request);
		$viewer->assign('MODULE', $moduleName);
		$viewer->assign('ACTION', 'ExportData');

		$viewer->view('Export.tpl', $moduleName);
	}

	/**
	 * Postprocess
	 * @param Vtiger_Request $request
	 */
	public function postprocess(Vtiger_Request $request)
	{
		
	}
}

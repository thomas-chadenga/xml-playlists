<?php

    //$xmlString = simplexml_load_file("questions-SACOB-A-20150406-1713.xml") or die("Error: Cannot load XML");

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

    $xmlString = "<?xml version='1.0' encoding='UTF-8'?>
<quiz>

    <!-- question: 164  -->
    <question type='ddmatch'>
        <name>
            <text>ACEBAQ4DD</text>
        </name>
        <questiontext format='html'>
            <text>Drag and Drop the appropriate answer into the appropriate cell in the table.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>The capital account records any contributions made by the owner. The drawings account records any withdrawals made by the owner. Profit is the term used when the business makes money. Cost of sales is the expense incurred when trading inventory is sold.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <correctfeedback format='moodle_auto_format'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='moodle_auto_format'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='moodle_auto_format'>
            <text></text>
        </incorrectfeedback>
        <subquestion format='html'>
            <text>Contributions by the owner are recorded in the _______ account.</text>
            <answer format='html'>
                <text>Capital</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Withdrawals by the owner are recorded in the______ account.</text>
            <answer format='html'>
                <text>Drawings</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>The term used when the business makes money.</text>
            <answer format='html'>
                <text>Profit</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Expense incurred on sale of inventory.</text>
            <answer format='html'>
                <text>Cost of sales</text>
            </answer>
        </subquestion>
    </question>

    <!-- question: 22231  -->
    <question type='ddmatch'>
        <name>
            <text>APPEMP1DD</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[<p>Drag and Drop the appropriate answer into the appropriate cell in the table.</p>]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[<p><strong>Application forms:</strong>Provide information for deciding whether an applicant meets the minimum requirements for experience, education etc.</p>
<p><strong>Preliminary interview:</strong>This type of interview should last at least 10 minutes. </p>
<p><strong>Self-directed Search:</strong>An example of an Interest test.</p>
<p><strong>Biographical interviews:</strong>This type of interview covers the candidate’s background<strong>.</strong></p>
<p><strong>Behaviourally-based interviews:</strong>An interview which is competency based.</p>
<p><strong>Self-report questionnaires:</strong>To identify personality traits<strong>.</strong></p>
<p></p>]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.3333333</penalty>
        <hidden>0</hidden>
        <correctfeedback format='html'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='html'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='html'>
            <text></text>
        </incorrectfeedback>
        <subquestion format='html'>
            <text><![CDATA[<p>Provide information for deciding whether an applicant meets the minimum requirements for experience, education etc.</p>]]></text>
            <answer format='html'>
                <text><![CDATA[<p>Application forms</p>]]></text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text><![CDATA[<p>This type of interview should last at least 10 minutes.</p>]]></text>
            <answer format='html'>
                <text><![CDATA[<p>Preliminary interview</p>]]></text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text><![CDATA[<p>An example of an Interest test.</p>]]></text>
            <answer format='html'>
                <text><![CDATA[<p>Self-directed Search</p>]]></text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text><![CDATA[<p>An interview which is competency based.</p>]]></text>
            <answer format='html'>
                <text><![CDATA[<p>Biographical interviews</p>]]></text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text><![CDATA[<p>An interview which is competency based.</p>]]></text>
            <answer format='html'>
                <text><![CDATA[<p>Behaviourally-based interviews</p>]]></text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text><![CDATA[<p>To identify personality traits.</p>]]></text>
            <answer format='html'>
                <text><![CDATA[<p>Self-report questionnaires</p>]]></text>
            </answer>
        </subquestion>
    </question>

    <!-- question: 20039  -->
    <question type='ddmatch'>
        <name>
            <text>gg_ACEBAQ1DD</text>
        </name>
        <questiontext format='html'>
            <text>Drag and Drop the appropriate answer into the appropriate cell in the table.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>An asset is a resource to the business. Another term used to describe a liability, is debt. An expense will decrease the owners equity. Income will increase owners equity.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <correctfeedback format='moodle_auto_format'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='moodle_auto_format'>
            <text>1</text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='moodle_auto_format'>
            <text>0</text>
        </incorrectfeedback>
        <subquestion format='html'>
            <text>Liability</text>
            <answer format='html'>
                <text>Debt</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Asset</text>
            <answer format='html'>
                <text>Resource</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Expense</text>
            <answer format='html'>
                <text>Decrease in owners equity</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Income</text>
            <answer format='html'>
                <text>Increase in owners equity</text>
            </answer>
        </subquestion>
    </question>

    <!-- question: 20040  -->
    <question type='ddmatch'>
        <name>
            <text>gg_ACEBAQ2DD</text>
        </name>
        <questiontext format='html'>
            <text>Drag and Drop the appropriate answer into the appropriate cell in the table.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>An office building is a non-current asset. Cash is a current asset. A 10-year loan is a non-current liability. A bank overdraft is a current liability.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <correctfeedback format='moodle_auto_format'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='moodle_auto_format'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='moodle_auto_format'>
            <text></text>
        </incorrectfeedback>
        <subquestion format='html'>
            <text>Non-current asset</text>
            <answer format='html'>
                <text>Office building</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Current asset</text>
            <answer format='html'>
                <text>Cash</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Non-Current liability</text>
            <answer format='html'>
                <text>10-year loan</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Current liability</text>
            <answer format='html'>
                <text>Bank overdraft</text>
            </answer>
        </subquestion>
    </question>

    <!-- question: 150  -->
    <question type='matching'>
        <name>
            <text>ACEBAQ2MT</text>
        </name>
        <questiontext format='html'>
            <text>Choose the most appropriate alternative from the options provided.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>An office building is a non-current asset. Cash is a current asset. A 10-year loan is a non-current liability. A bank overdraft is a current liability.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <shuffleanswers>true</shuffleanswers>
        <correctfeedback format='moodle_auto_format'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='moodle_auto_format'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='moodle_auto_format'>
            <text></text>
        </incorrectfeedback>
        <subquestion format='html'>
            <text>Non-current asset</text>
            <answer>
                <text>Office building</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Current asset</text>
            <answer>
                <text>Cash</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Non-Current liability</text>
            <answer>
                <text>10-year loan</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Current liability</text>
            <answer>
                <text>Bank overdraft</text>
            </answer>
        </subquestion>
    </question>

    <!-- question: 151  -->
    <question type='matching'>
        <name>
            <text>ACEBAQ3MT</text>
        </name>
        <questiontext format='html'>
            <text>Choose the most appropriate alternative from the options provided.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>Rental received is income.
                Wages and salaries paid is an expense.
                Drawings is a proprietary account.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <shuffleanswers>true</shuffleanswers>
        <correctfeedback format='moodle_auto_format'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='moodle_auto_format'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='moodle_auto_format'>
            <text></text>
        </incorrectfeedback>
        <subquestion format='html'>
            <text>Income</text>
            <answer>
                <text>Rental received</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Expense</text>
            <answer>
                <text>Wages and salaries</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Proprietary</text>
            <answer>
                <text>Drawings</text>
            </answer>
        </subquestion>
    </question>

    <!-- question: 152  -->
    <question type='matching'>
        <name>
            <text>ACEBAQ4MT</text>
        </name>
        <questiontext format='html'>
            <text>Choose the most appropriate alternative from the options provided.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>The capital account records any contributions made by the owner. The drawings account records any withdrawals made by the owner. Profit is the term used when the business makes money. Cost of sales is the expense incurred when trading inventory is sold.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <shuffleanswers>true</shuffleanswers>
        <correctfeedback format='moodle_auto_format'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='moodle_auto_format'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='moodle_auto_format'>
            <text></text>
        </incorrectfeedback>
        <subquestion format='html'>
            <text>Contributions by the owner are recorded in the _______ account.</text>
            <answer>
                <text>Capital</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Withdrawals by the owner are recorded in the _______ account.</text>
            <answer>
                <text>Drawings</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>The term used when the business makes money.</text>
            <answer>
                <text>Profit</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>Expense incurred on sale of inventory.</text>
            <answer>
                <text>Cost of sales</text>
            </answer>
        </subquestion>
    </question>

    <!-- question: 160  -->
    <question type='matching'>
        <name>
            <text>ACEBAQ7MT</text>
        </name>
        <questiontext format='html'>
            <text>Choose the most appropriate alternative from the options provided.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>The debit side of a T-account is on the left. The credit side of the T-account is on the right. The corresponding account is called a contra-account. A journal is a tabulation of similar entries.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <shuffleanswers>true</shuffleanswers>
        <correctfeedback format='moodle_auto_format'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='moodle_auto_format'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='moodle_auto_format'>
            <text></text>
        </incorrectfeedback>
        <subquestion format='html'>
            <text>The left side of a T-account is the _______ side.</text>
            <answer>
                <text>debit</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>The right side of a T-account is the _______ side.</text>
            <answer>
                <text>credit</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>The corresponding account is called a _______ account.</text>
            <answer>
                <text>contra</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text>A tabulation of similar entries is a __________.</text>
            <answer>
                <text>journal</text>
            </answer>
        </subquestion>
    </question>

    <!-- question: 22232  -->
    <question type='matching'>
        <name>
            <text>APPEMP1MT</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[<p>Choose the most appropriate alternative from the options provided.</p>]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[<p><strong>Aptitude test:</strong>High Level Scales (NIPR) </p>
<p><strong>Personality test:</strong>Thematic Appreception Test (TAT)</p>
<p><strong>Intelligence test:</strong>New South African Group Test</p>
<p><strong>Ability test:</strong>PersonnelTest Battery (PTB)</p>]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.3333333</penalty>
        <hidden>0</hidden>
        <shuffleanswers>false</shuffleanswers>
        <correctfeedback format='html'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='html'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='html'>
            <text></text>
        </incorrectfeedback>
        <subquestion format='html'>
            <text><![CDATA[<p>High Level Scales (NIPR)</p>]]></text>
            <answer>
                <text>Aptitude test</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text><![CDATA[<p>Thematic Appreception Test (TAT)</p>]]></text>
            <answer>
                <text>Personality test</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text><![CDATA[<p>New South African Group Test</p>]]></text>
            <answer>
                <text>Intelligence test</text>
            </answer>
        </subquestion>
        <subquestion format='html'>
            <text><![CDATA[<p>Personnel Test Battery (PTB)</p>]]></text>
            <answer>
                <text>Ability test</text>
            </answer>
        </subquestion>
    </question>

    <!-- question: 2705  -->
    <question type='multichoice'>
        <name>
            <text>ABC1MS</text>
        </name>
        <questiontext format='html'>
            <text>In activity-based costing what is meant by the term 'cost driver'?</text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[Option 3 is correct.<br /><br />A cost driver is an activity that causes a cost to be incurred. The more complex the operations, the more cost-driving activities are likely to exist.<br />]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <single>true</single>
        <shuffleanswers>false</shuffleanswers>
        <answernumbering>123</answernumbering>
        <correctfeedback format='html'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='html'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='html'>
            <text></text>
        </incorrectfeedback>
        <answer fraction='0' format='moodle_auto_format'>
            <text>A cost driver is someone who operates the machinery in the factory.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>A cost driver refers to a direct cost in the manufacturing process.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>A cost driver is an activity that causes a cost to be incurred.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>None of the above.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 2760  -->
    <question type='multichoice'>
        <name>
            <text>ABC2MS</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[Which of the following would be a relevant cost driver to select for the overhead &quot;set-ups&quot;?]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.1000000</penalty>
        <hidden>0</hidden>
        <single>true</single>
        <shuffleanswers>false</shuffleanswers>
        <answernumbering>123</answernumbering>
        <correctfeedback format='html'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='html'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='html'>
            <text></text>
        </incorrectfeedback>
        <answer fraction='0' format='moodle_auto_format'>
            <text>Set-up time</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>Inspection hours</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>Number of set-ups</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>Number of machine hours</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 2945  -->
    <question type='multichoice'>
        <name>
            <text>ACCAD1MS</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[When disposing of an asset one would remove the accumulated depreciation from the books by debiting the accumulated depreciation account.&#010;&#010;Which contra account is credited?]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[Option is 3 correct.<br><br>&#010;&#010;The asset disposal account is credited with the total accumulated depreciation amount.]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <single>true</single>
        <shuffleanswers>false</shuffleanswers>
        <answernumbering>123</answernumbering>
        <correctfeedback format='html'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='html'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='html'>
            <text></text>
        </incorrectfeedback>
        <answer fraction='0' format='moodle_auto_format'>
            <text>The sales account.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>The depreciation account.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>The asset disposal account.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>The account of the asset that was sold.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 2783  -->
    <question type='multichoice'>
        <name>
            <text>ACCAD2MS</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[Which of the following accounting entries should <u>not</u> appear in the account 'Asset Disposal' on the sale of a non-current asset?<br />]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[Option is 1 correct.<br /><br />There would be no single Carrying Value entry. This is calculated using the double entry system of recording the Cost Price and the Accumulated Depreciation amount.<br />]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <single>true</single>
        <shuffleanswers>false</shuffleanswers>
        <answernumbering>123</answernumbering>
        <correctfeedback format='html'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='html'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='html'>
            <text></text>
        </incorrectfeedback>
        <answer fraction='100' format='moodle_auto_format'>
            <text>Carrying Value</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>Cost Price</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>Accumulated Depreciation</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>Selling Price</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='moodle_auto_format'>
            <text>Profit on sale of asset</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 3483  -->
    <question type='multichoice'>
        <name>
            <text>ACCCC1MM</text>
        </name>
        <questiontext format='html'>
            <text>Which of the following are mandatory disclosures in the financials of the close corporation?</text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[All options are correct.<br /><br />The Act requires that the annual financial statements must disclose separately the aggregate amounts as at the end of the financial year, of each of the following:<br />• contributions by members,<br />• retained earnings,<br />• revaluations of property, plant and equipment (forming part of ‘other components of equity’)<br />• amounts of loans to members, and<br />• amounts of loans from members<br />]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <single>false</single>
        <shuffleanswers>false</shuffleanswers>
        <answernumbering>123</answernumbering>
        <correctfeedback format='html'>
            <text></text>
        </correctfeedback>
        <partiallycorrectfeedback format='html'>
            <text></text>
        </partiallycorrectfeedback>
        <incorrectfeedback format='html'>
            <text></text>
        </incorrectfeedback>
        <answer fraction='25' format='moodle_auto_format'>
            <text>Contributions by members.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='25' format='moodle_auto_format'>
            <text>Amounts of loans to members.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='25' format='moodle_auto_format'>
            <text>Amounts of loans from members.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='25' format='moodle_auto_format'>
            <text>Retained earnings.</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

     <!-- question: 22323  -->
    <question type='shortanswer'>
        <name>
            <text>APRTR1SA</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[<p>Tanja disposed of her primary residence on 15 January 2013. The proceeds on this sale were</p>
<p>R3 500 000 and the base cost was R800 000.</p>
<p>The capital gain = <span style='line-height: 1.4;'>R _________</span></p>]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[<p>R3 500 000 less R2 000 000(Primary residence exclusion) less R800 000 = R700 000</p>]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.3333333</penalty>
        <hidden>0</hidden>
        <usecase>0</usecase>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R700 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 700 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R700000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 700000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>700 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>700000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 22324  -->
    <question type='shortanswer'>
        <name>
            <text>APRTR2SA</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[<p>Tanja also disposed of property owned by her in the USA on 1 December 2012 for the rand <span style='line-height: 1.4;'>value of R3 500 000 – her base cost on this property was R2 300 000. Tanja was required to </span><span style='line-height: 1.4;'>pay an equivalent of R52 000 USA taxes on this disposal.</span></p>
<p>The capital gain = <span style='line-height: 1.4;'>R __________</span></p>]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[<p>R3 500 000 less R 2 300 000 = R1 200 000.</p>]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.3333333</penalty>
        <hidden>0</hidden>
        <usecase>0</usecase>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R1 200 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 1 200 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R1200 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 1200 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R1200000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 1200000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>1 200 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>1200 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>1 200000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>1200000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R1,200 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R1,200000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 1,200 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 1,200000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 22326  -->
    <question type='shortanswer'>
        <name>
            <text>APRTR3SA</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[<p>Tanja has the following assets and liabilities as at 28 February 2013: Property, R4 000 000; <span style='line-height: 1.4;'>Beach cottage, R800 000; Mortgage bond on the property, R2 250 000; Cash in bank, R </span><span style='line-height: 1.4;'>45 000; Car loan, R95 000; Personal effects, R 40 000, Furniture and fittings, R 80 000. </span><span style='line-height: 1.4;'>The statement of assets and liabilities will show total liabilities to equal R ________</span><span style='line-height: 1.4;'><br /></span></p>]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[<p>R2 345 000 = Mortgage bond of R2 250 000 plus Car loan of R95 000.</p>]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.3333333</penalty>
        <hidden>0</hidden>
        <usecase>0</usecase>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R2 345 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 2 345 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R2345 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 2345 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R2 345000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>R 2 345000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>2 345 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>2345 000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='moodle_auto_format'>
            <text>2 345000</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 2371  -->
    <question type='shortanswer'>
        <name>
            <text>ATR1SA</text>
        </name>
        <questiontext format='html'>
            <text>A ______angle is a 90 degree angle.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>A right angle is a 90 degree angle.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <usecase>0</usecase>
        <answer fraction='100' format='plain_text'>
            <text>right</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 3376  -->
    <question type='truefalse'>
        <name>
            <text>AAPC1TF</text>
        </name>
        <questiontext format='html'>
            <text>Goods are delivered to a company where the receiving clerk checks them and verbally accepts delivery. This is effective control enough as the receiving clerk has been with the company for 20 years.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>This is false. A goods received note must be made out or a delivery note signed and goods delivered checked against the purchase order. Even though the delivery clerk in a long-term employee, no risk must be taken when it comes to fraud or theft.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <answer fraction='0' format='plain_text'>
            <text>true</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='plain_text'>
            <text>false</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 3377  -->
    <question type='truefalse'>
        <name>
            <text>AAPC2TF</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[A cheques written out for payment of supplys delivered must be sugned by two authorised signatories for effective control.<br />]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text>This is true. If this is not possible then there must be a limit up to which one signatory can sign a check. Above this limit there must be two signatories.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <answer fraction='100' format='plain_text'>
            <text>true</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='plain_text'>
            <text>false</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 3822  -->
    <question type='truefalse'>
        <name>
            <text>AAR1TF</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[An anomalies apparent when comparisons are made to previous months should be investigated by the auditor.<!--[if gte mso 9]><xml>&#010; <w:LatentStyles DefLockedState='false' DefUnhideWhenUsed='true'&#010;  DefSemiHidden='true' DefQFormat='false' DefPriority='99'&#010;  LatentStyleCount='267'>&#010;  <w:LsdException Locked='false' Priority='0' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Normal'/>&#010;  <w:LsdException Locked='false' Priority='9' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='heading 1'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 2'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 3'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 4'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 5'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 6'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 7'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 8'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 9'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 1'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 2'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 3'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 4'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 5'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 6'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 7'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 8'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 9'/>&#010;  <w:LsdException Locked='false' Priority='35' QFormat='true' Name='caption'/>&#010;  <w:LsdException Locked='false' Priority='10' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Title'/>&#010;  <w:LsdException Locked='false' Priority='1' Name='Default Paragraph Font'/>&#010;  <w:LsdException Locked='false' Priority='11' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtitle'/>&#010;  <w:LsdException Locked='false' Priority='22' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Strong'/>&#010;  <w:LsdException Locked='false' Priority='20' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='59' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Table Grid'/>&#010;  <w:LsdException Locked='false' UnhideWhenUsed='false' Name='Placeholder Text'/>&#010;  <w:LsdException Locked='false' Priority='1' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='No Spacing'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 1'/>&#010;  <w:LsdException Locked='false' UnhideWhenUsed='false' Name='Revision'/>&#010;  <w:LsdException Locked='false' Priority='34' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='List Paragraph'/>&#010;  <w:LsdException Locked='false' Priority='29' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Quote'/>&#010;  <w:LsdException Locked='false' Priority='30' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Quote'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='19' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtle Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='21' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='31' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtle Reference'/>&#010;  <w:LsdException Locked='false' Priority='32' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Reference'/>&#010;  <w:LsdException Locked='false' Priority='33' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Book Title'/>&#010;  <w:LsdException Locked='false' Priority='37' Name='Bibliography'/>&#010;  <w:LsdException Locked='false' Priority='39' QFormat='true' Name='TOC Heading'/>&#010; </w:LatentStyles>&#010;</xml><![endif]--><!--[if gte mso 10]>&#010;<style>&#010; /* Style Definitions */&#010; table.MsoNormalTable&#010;	{mso-style-name:'Table Normal';&#010;	mso-tstyle-rowband-size:0;&#010;	mso-tstyle-colband-size:0;&#010;	mso-style-noshow:yes;&#010;	mso-style-priority:99;&#010;	mso-style-qformat:yes;&#010;	mso-style-parent:'';&#010;	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;&#010;	mso-para-margin:0cm;&#010;	mso-para-margin-bottom:.0001pt;&#010;	mso-pagination:widow-orphan;&#010;	font-size:10.0pt;&#010;	font-family:'Times New Roman','serif';}&#010;</style>&#010;<![endif]-->]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[This is true.Anomalies are highlighted in bold and should be investigated by the auditor by following up with management.<span style='font-size: 11pt; '></span>]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <answer fraction='100' format='plain_text'>
            <text>true</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='plain_text'>
            <text>false</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 3828  -->
    <question type='truefalse'>
        <name>
            <text>AAR2TF</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[Analytical review procedures involve analysing the income statement month by mnth and highlighting any figures that stand out from the norm.<!--[if gte mso 9]><xml>&#010; <w:LatentStyles DefLockedState='false' DefUnhideWhenUsed='true'&#010;  DefSemiHidden='true' DefQFormat='false' DefPriority='99'&#010;  LatentStyleCount='267'>&#010;  <w:LsdException Locked='false' Priority='0' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Normal'/>&#010;  <w:LsdException Locked='false' Priority='9' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='heading 1'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 2'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 3'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 4'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 5'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 6'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 7'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 8'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 9'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 1'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 2'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 3'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 4'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 5'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 6'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 7'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 8'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 9'/>&#010;  <w:LsdException Locked='false' Priority='35' QFormat='true' Name='caption'/>&#010;  <w:LsdException Locked='false' Priority='10' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Title'/>&#010;  <w:LsdException Locked='false' Priority='1' Name='Default Paragraph Font'/>&#010;  <w:LsdException Locked='false' Priority='11' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtitle'/>&#010;  <w:LsdException Locked='false' Priority='22' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Strong'/>&#010;  <w:LsdException Locked='false' Priority='20' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='59' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Table Grid'/>&#010;  <w:LsdException Locked='false' UnhideWhenUsed='false' Name='Placeholder Text'/>&#010;  <w:LsdException Locked='false' Priority='1' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='No Spacing'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 1'/>&#010;  <w:LsdException Locked='false' UnhideWhenUsed='false' Name='Revision'/>&#010;  <w:LsdException Locked='false' Priority='34' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='List Paragraph'/>&#010;  <w:LsdException Locked='false' Priority='29' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Quote'/>&#010;  <w:LsdException Locked='false' Priority='30' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Quote'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='19' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtle Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='21' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='31' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtle Reference'/>&#010;  <w:LsdException Locked='false' Priority='32' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Reference'/>&#010;  <w:LsdException Locked='false' Priority='33' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Book Title'/>&#010;  <w:LsdException Locked='false' Priority='37' Name='Bibliography'/>&#010;  <w:LsdException Locked='false' Priority='39' QFormat='true' Name='TOC Heading'/>&#010; </w:LatentStyles>&#010;</xml><![endif]--><!--[if gte mso 10]>&#010;<style>&#010; /* Style Definitions */&#010; table.MsoNormalTable&#010;	{mso-style-name:'Table Normal';&#010;	mso-tstyle-rowband-size:0;&#010;	mso-tstyle-colband-size:0;&#010;	mso-style-noshow:yes;&#010;	mso-style-priority:99;&#010;	mso-style-qformat:yes;&#010;	mso-style-parent:'';&#010;	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;&#010;	mso-para-margin:0cm;&#010;	mso-para-margin-bottom:.0001pt;&#010;	mso-pagination:widow-orphan;&#010;	font-size:10.0pt;&#010;	font-family:'Times New Roman','serif';}&#010;</style>&#010;<![endif]-->]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[This is true.<br /><br /><br /><br /><br /><span style='font-size: 11pt; '></span>]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <answer fraction='100' format='plain_text'>
            <text>true</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='plain_text'>
            <text>false</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 3829  -->
    <question type='truefalse'>
        <name>
            <text>AAR3TF</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[One of the key purposes of analytical review procedures is to provide corroborative evidence in audit concluding procedures.<!--[if gte mso 9]><xml>&#010; <w:LatentStyles DefLockedState='false' DefUnhideWhenUsed='true'&#010;  DefSemiHidden='true' DefQFormat='false' DefPriority='99'&#010;  LatentStyleCount='267'>&#010;  <w:LsdException Locked='false' Priority='0' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Normal'/>&#010;  <w:LsdException Locked='false' Priority='9' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='heading 1'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 2'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 3'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 4'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 5'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 6'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 7'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 8'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 9'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 1'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 2'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 3'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 4'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 5'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 6'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 7'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 8'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 9'/>&#010;  <w:LsdException Locked='false' Priority='35' QFormat='true' Name='caption'/>&#010;  <w:LsdException Locked='false' Priority='10' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Title'/>&#010;  <w:LsdException Locked='false' Priority='1' Name='Default Paragraph Font'/>&#010;  <w:LsdException Locked='false' Priority='11' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtitle'/>&#010;  <w:LsdException Locked='false' Priority='22' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Strong'/>&#010;  <w:LsdException Locked='false' Priority='20' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='59' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Table Grid'/>&#010;  <w:LsdException Locked='false' UnhideWhenUsed='false' Name='Placeholder Text'/>&#010;  <w:LsdException Locked='false' Priority='1' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='No Spacing'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 1'/>&#010;  <w:LsdException Locked='false' UnhideWhenUsed='false' Name='Revision'/>&#010;  <w:LsdException Locked='false' Priority='34' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='List Paragraph'/>&#010;  <w:LsdException Locked='false' Priority='29' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Quote'/>&#010;  <w:LsdException Locked='false' Priority='30' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Quote'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='19' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtle Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='21' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='31' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtle Reference'/>&#010;  <w:LsdException Locked='false' Priority='32' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Reference'/>&#010;  <w:LsdException Locked='false' Priority='33' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Book Title'/>&#010;  <w:LsdException Locked='false' Priority='37' Name='Bibliography'/>&#010;  <w:LsdException Locked='false' Priority='39' QFormat='true' Name='TOC Heading'/>&#010; </w:LatentStyles>&#010;</xml><![endif]--><!--[if gte mso 10]>&#010;<style>&#010; /* Style Definitions */&#010; table.MsoNormalTable&#010;	{mso-style-name:'Table Normal';&#010;	mso-tstyle-rowband-size:0;&#010;	mso-tstyle-colband-size:0;&#010;	mso-style-noshow:yes;&#010;	mso-style-priority:99;&#010;	mso-style-qformat:yes;&#010;	mso-style-parent:'';&#010;	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;&#010;	mso-para-margin:0cm;&#010;	mso-para-margin-bottom:.0001pt;&#010;	mso-pagination:widow-orphan;&#010;	font-size:10.0pt;&#010;	font-family:'Times New Roman','serif';}&#010;</style>&#010;<![endif]-->]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[This is true.<br /><br /><br /><br /><br /><span style='font-size: 11pt; '></span>]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <answer fraction='100' format='plain_text'>
            <text>true</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='plain_text'>
            <text>false</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 3830  -->
    <question type='truefalse'>
        <name>
            <text>AAR4TF</text>
        </name>
        <questiontext format='html'>
            <text><![CDATA[Analytical procedures include studying the relationship between financial and non-financial information.<!--[if gte mso 9]><xml>&#010; <w:LatentStyles DefLockedState='false' DefUnhideWhenUsed='true'&#010;  DefSemiHidden='true' DefQFormat='false' DefPriority='99'&#010;  LatentStyleCount='267'>&#010;  <w:LsdException Locked='false' Priority='0' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Normal'/>&#010;  <w:LsdException Locked='false' Priority='9' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='heading 1'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 2'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 3'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 4'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 5'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 6'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 7'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 8'/>&#010;  <w:LsdException Locked='false' Priority='9' QFormat='true' Name='heading 9'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 1'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 2'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 3'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 4'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 5'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 6'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 7'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 8'/>&#010;  <w:LsdException Locked='false' Priority='39' Name='toc 9'/>&#010;  <w:LsdException Locked='false' Priority='35' QFormat='true' Name='caption'/>&#010;  <w:LsdException Locked='false' Priority='10' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Title'/>&#010;  <w:LsdException Locked='false' Priority='1' Name='Default Paragraph Font'/>&#010;  <w:LsdException Locked='false' Priority='11' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtitle'/>&#010;  <w:LsdException Locked='false' Priority='22' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Strong'/>&#010;  <w:LsdException Locked='false' Priority='20' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='59' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Table Grid'/>&#010;  <w:LsdException Locked='false' UnhideWhenUsed='false' Name='Placeholder Text'/>&#010;  <w:LsdException Locked='false' Priority='1' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='No Spacing'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 1'/>&#010;  <w:LsdException Locked='false' UnhideWhenUsed='false' Name='Revision'/>&#010;  <w:LsdException Locked='false' Priority='34' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='List Paragraph'/>&#010;  <w:LsdException Locked='false' Priority='29' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Quote'/>&#010;  <w:LsdException Locked='false' Priority='30' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Quote'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 1'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 2'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 3'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 4'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 5'/>&#010;  <w:LsdException Locked='false' Priority='60' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Shading Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='61' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='62' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Light Grid Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='63' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='64' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Shading 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='65' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='66' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium List 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='67' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 1 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='68' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 2 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='69' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Medium Grid 3 Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='70' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Dark List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='71' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Shading Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='72' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful List Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='73' SemiHidden='false'&#010;   UnhideWhenUsed='false' Name='Colorful Grid Accent 6'/>&#010;  <w:LsdException Locked='false' Priority='19' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtle Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='21' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Emphasis'/>&#010;  <w:LsdException Locked='false' Priority='31' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Subtle Reference'/>&#010;  <w:LsdException Locked='false' Priority='32' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Intense Reference'/>&#010;  <w:LsdException Locked='false' Priority='33' SemiHidden='false'&#010;   UnhideWhenUsed='false' QFormat='true' Name='Book Title'/>&#010;  <w:LsdException Locked='false' Priority='37' Name='Bibliography'/>&#010;  <w:LsdException Locked='false' Priority='39' QFormat='true' Name='TOC Heading'/>&#010; </w:LatentStyles>&#010;</xml><![endif]--><!--[if gte mso 10]>&#010;<style>&#010; /* Style Definitions */&#010; table.MsoNormalTable&#010;	{mso-style-name:'Table Normal';&#010;	mso-tstyle-rowband-size:0;&#010;	mso-tstyle-colband-size:0;&#010;	mso-style-noshow:yes;&#010;	mso-style-priority:99;&#010;	mso-style-qformat:yes;&#010;	mso-style-parent:'';&#010;	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;&#010;	mso-para-margin:0cm;&#010;	mso-para-margin-bottom:.0001pt;&#010;	mso-pagination:widow-orphan;&#010;	font-size:10.0pt;&#010;	font-family:'Times New Roman','serif';}&#010;</style>&#010;<![endif]-->]]></text>
        </questiontext>
        <generalfeedback format='html'>
            <text><![CDATA[This is true. A good example would be between payroll costs and the number of employees.<br /><br /><br /><br /><br /><span style='font-size: 11pt; '></span>]]></text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <answer fraction='100' format='plain_text'>
            <text>true</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='plain_text'>
            <text>false</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 2752  -->
    <question type='truefalse'>
        <name>
            <text>ABC10TF</text>
        </name>
        <questiontext format='html'>
            <text>The cost driver rate is calculated as the activity cost divided by the cost driver volume.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>This is true. The cost driver rate is calculated as the activity cost divided by the cost driver volume.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <answer fraction='100' format='plain_text'>
            <text>true</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='0' format='plain_text'>
            <text>false</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

    <!-- question: 2756  -->
    <question type='truefalse'>
        <name>
            <text>ABC11TF</text>
        </name>
        <questiontext format='html'>
            <text>A traditional costing system is more accurate when it comes to assigning overhead costs than an activities based costing system.</text>
        </questiontext>
        <generalfeedback format='html'>
            <text>This is false. A traditional costing system is less accurate when it comes to assigning overhead costs than an activities based costing system.</text>
        </generalfeedback>
        <defaultgrade>1.0000000</defaultgrade>
        <penalty>0.0000000</penalty>
        <hidden>0</hidden>
        <answer fraction='0' format='plain_text'>
            <text>true</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
        <answer fraction='100' format='plain_text'>
            <text>false</text>
            <feedback format='html'>
                <text></text>
            </feedback>
        </answer>
    </question>

</quiz>";

    //load into object
    $xml = simplexml_load_string($xmlString) or die("Error: Cannot create object");

    //parse object and place into tables in db
    //connect to db
    Function DB_Connection()
    {
        $host = "localhost";
        $port = 3306;
        $socket = "";
        $user = "root";
        $password = "";
        $dbname = "playlists";
        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
        return $con;
    }

    $conn = DB_Connection();

    $strSQL = "Truncate answers";
    $result = $conn->query($strSQL);
    $strSQL = "Truncate questions";
    $result = $conn->query($strSQL);


    $questiontype = "";
    $questionmark = "";
    $questionsolution = "";
    $typeid=0;
    $questiontext = "";


    $questionanswers = array();
    $questionanswerid = array();
    $correctanswerid = array();
    $answerid=1;
    $questionid = 1;

    //go thru and populate tables
    foreach( $xml as $question){
        //die('die '.count($xml));
        $questiontype = $question['type'];
        if($questiontype == "ddmatch"){
            $typeid = 1;
        }
        else  if($questiontype == "matching"){
            $typeid = 2;
        }
        else  if($questiontype == "truefalse"){
            $typeid = 3;
        }
        else  if($questiontype == "multichoice"){
            $typeid = 4;
        }
        else  if($questiontype == "shortanswer"){
            $typeid = 5;
        }
        foreach($question as $key => $value) {

            if ($key == 'questiontext') {
                $questiontext = $value->text;
                //die('dier '.$key.' '.$value->text);
            }
            else if ($key == 'generalfeedback') {
                $questionsolution = $value->text;
                //die('dier '.$key.' '.$value->text);
            }
            else if ($key == 'defaultgrade') {
                $questionmark = $value;
               // die('dier '.$key.' '.$value);
            }
            else if ($key == 'answer') {
                $questionanswers[] = $value->text;
                //die('dier '.$key.' '.$value->text);
                $questionanswerid[] = $answerid;
                if(isset($key['fraction'])){
                    if($key['fraction'] == '0'){
                        $correctanswerid[] = 0;
                    }
                    else{
                        $correctanswerid[] = $answerid;
                    }
                }
                else{
                    $correctanswerid[] = $answerid;
                }
                $answerid+=1;
            }
            else if ($key == 'subquestion') {
                $questionanswers[] = $value->text;
               // die('dieeeeer '.$key.' '.$value->text.' '.$value->answer->text);
                $questionanswerid[] = $answerid;
                $answerid +=1;
                $questionanswers[] = $value->answer->text;
                $questionanswerid[] = $answerid;
                $answerid +=1;
                $correctanswerid[] = $answerid - 1;
                $correctanswerid[] = $answerid - 2;
            }
        }

        //die('e are here');

        //die($questionid.'..... '.$questiontext.'...... '.$questionmark.'...... '.$questionsolution);

        //populate db and reset all arrays
        //populate questions
        $strSQL = "INSERT INTO questions (id,question_text,question_marks,question_solution,question_type) VALUES ($questionid,'$questiontext','$questionmark','$questionsolution','$questiontype')";
        $qsn = $conn->query($strSQL);
        if($qsn){
            echo("great");
        }
        else{
            echo("nope");
        }

        //populate answers
        for($i=0;$i<count($questionanswers);$i++) {
            $strSQL = "INSERT INTO answers (id,answer_text,correct_answer_id,question_id) VALUES ($questionanswerid[$i],'$questionanswers[$i]',$correctanswerid[$i],$questionid)";
            $conn->query($strSQL);
        }

        $questionid +=1;
        unset($questionanswers);
        unset($correctanswerid);
        unset($questionanswerid);
        $questionanswers = array();
        $questionanswerid = array();
        $correctanswerid = array();
    }

?>
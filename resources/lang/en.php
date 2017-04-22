<?php


$L = array();
$L["ENABLED"] = true;

// Core language strings
$L["language"] = "English";
$L["title"] = "generatedata.com";
$L["about"] = "About";
$L["accounts"] = "Accounts";
$L["back"] = "Back";
$L["add"] = "Add";
$L["confirm_delete_form"] = "Are you sure you want to delete this form?";
$L["confirm_empty_form"] = "Are you sure you want to clear the page?";
$L["countries"] = "Countries";
$L["meta_description"] = "GenerateData.com: free, GNU-licensed, random custom data generator for testing software";
$L["meta_keywords"] = "Random Data, Test Data, Sample Data, data generator, generate data";
$L["row_label"] = "Column Title";
$L["row_label_plural"] = "Column Titles";
$L["update_settings"] = "Update Settings";
$L["data_type"] = "Data Type";
$L["default_save_form_empty_str"] = "Enter form name here";
$L["del"] = "Del";
$L["del_uc"] = "DEL";
$L["donate"] = "Donate!";
$L["empty_form"] = "Empty Form";
$L["examples"] = "Examples";
$L["fatal_error"] = "A fatal error occurred.";
$L["form_deleted"] = "The form has been deleted.";
$L["form_exists_overwrite_confirmation"] = "This form already exists. Do you want to overwrite it?";
$L["form_not_deleted"] = "Sorry, we couldn&#39;t delete this form. Re-log in and try again.";
$L["form_saved"] = "Your form has been saved.";
$L["forums"] = "Forums";
$L["generate"] = "Generate";
$L["generator"] = "Generator";
$L["help"] = "Help";
$L["hide_error"] = "Hide error";
$L["human_data"] = "Human Data";
$L["math"] = "Math";
$L["invalid_custom_xml"] = "There&#39;s a problem with the custom XML markup you entered. Please consult the user documentation for more information.";
$L["invalid_num_results"] = "Please enter a valid number of results.";
$L["invalid_table_names"] = "Database column names can only alphanumeric characters and must begin with a letter. Please fix the following rows:";
$L["load_uc"] = "LOAD";
$L["load"] = "Load";
$L["missing_node_names"] = "The following rows have missing node names:";
$L["missing_table_names"] = "The following rows have missing table column names:";
$L["no_csv_delimiter"] = "Please enter the CSV delimiter.";
$L["no_data"] = "Oops, nothing to generate! Enter some data to be generated.";
$L["no_examples_available"] = "No examples available.";
$L["no_form_name"] = "Please enter a form name.";
$L["no_num_rows"] = "Please enter the number of rows to add.";
$L["no_options_available"] = "No options available.";
$L["none"] = "None";
$L["num_results"] = "Num Results";
$L["ok"] = "OK";
$L["options"] = "Options";
$L["order"] = "Order";
$L["other"] = "Other";
$L["please_fix_errors"] = "Please fix the following errors and resubmit:";
$L["please_select"] = "Please Select";
$L["select_data_type"] = "Select Data Type";
$L["result_type"] = "Result Type";
$L["row_sp"] = "Row(s)";
$L["save_uc"] = "SAVE";
$L["script_thinking"] = "Oops, hold on for a second. The script is thinking.";
$L["see_help_dialog"] = "&nbsp;See help dialog.";
$L["select_language"] = "Select Language";
$L["table_column"] = "Table Column";
$L["text"] = "Text";
$L["use_custom_xml_format"] = "Use custom XML format";
$L["website"] = "Website";
$L["no_js"] = "Please enable javascript in your browser.";
$L["no_js_blurb"] = "You know this is, like, the 21st century? The Data Generator script relies heavily on javascript - things just plain won't work without it. You&#39;ll need to enable it in your browser then refresh this page.";
$L["install"] = "Install";
$L["host_name"] = "Host Name";
$L["installation"] = "Installation";
$L["table_prefix"] = "Table Prefix";
$L["database_name"] = "Database Name";
$L["mysql_username"] = "MySQL Username";
$L["mysql_password"] = "MySQL Password";
$L["default_language"] = "Default Language";
$L["installation_intro"] = "Alrighty, let's get this sucker installed. Enter your database information to create your database tables. If you're unsure about any of these fields, click on the Help tab for a little more info.";
$L["version"] = "Version";
$L["help_intro"] = "The installation script does two things for you. One, it automatically generates a <b>settings.php</b> file which contains your unique database connection info, so that it knows how to connect to the database whenever you visit the script. Two, it populates the database with various information that it needs: things like general settings, user accounts and raw data like people's names, country and city names.";
$L["help_prerequisites"] = "Pre-requisites";
$L["help_prereq_info"] = "Just like virtually every other PHP/MySQL script out there, you need to have already created a database before running the installation script. <i>The installation script doesn't create the database, it just tries to connect to it to create the tables.</i> If you're not sure how to create a database within your environment, you'll either need to contact your hosting provider, or spend some time researching it on Google. Sorry!";
$L["host_name_desc"] = "The name of your database connection. Often it's just <i>localhost</i>, but sometimes it's something like <i>mysql.yoursite.com</i>.";
$L["still_stuck"] = "Still stuck?";
$L["refresh_page"] = "Refresh Page";
$L["database_info"] = "Database Info";
$L["user_account"] = "User Account";
$L["user_accounts"] = "User Accounts";
$L["password"] = "Password";
$L["reenter_password"] = "Re-enter password";
$L["email"] = "Email";
$L["yes"] = "Yes";
$L["no"] = "No";
$L["validation_no_db_hostname"] = "Please enter your database hostname.";
$L["validation_no_db_name"] = "Please enter your database name.";
$L["validation_invalid_chars"] = "Alphanumeric and underscore characters only, please.";
$L["validation_no_mysql_username"] = "Please enter your MySQL username.";
$L["validation_no_email"] = "Please enter your email address.";
$L["validation_invalid_email"] = "Please enter a valid email address.";
$L["validation_no_first_name"] = "Please enter your first name.";
$L["validation_no_last_name"] = "Please enter your last name.";
$L["validation_no_password"] = "Please enter your password.";
$L["install_invalid_db_info"] = "We were unable to connect to the database using the information you supplied. The error message the database returned is: <i>{\$db_connection_error}</i>";
$L["install_no_db_connection"] = "Please check your database name and login information. Although we were able to connect to the database host, we could not connect to the database. The error message the database returned is: <i>{\$db_select_error}</i>";
$L["settings_file_exists"] = "The settings file already exists. For new installations, the settings.php shouldn't exist. Either delete it and continue the installation script or try loading the script again with the existing settings file values.";
$L["first_name"] = "First Name";
$L["last_name"] = "Last Name";
$L["settings"] = "Settings";
$L["geo"] = "Geo";
$L["numeric"] = "Numeric";
$L["tip_country_data"] = "This section lets you control what country-specific data should be included in your generated data sets. The values you select here affect certain Data Types that you may select, such as <i>Region</i>, <i>Postal/Zip</i> and <i>Country</i>.</p><p>To give you a better idea of what this means, try selecting the <i>Region</i> Data Type for one of your rows in the Data Set section, then add / remove countries from the Country-Specific Data section. You'll see that the row options that appear are directly affected by the countries you have selected: you can only ever generate a subset of the countries selected.";
$L["country_specific_data"] = "Country-specific data";
$L["data_set"] = "Data Set";
$L["data_format"] = "Data Format";
$L["no_additional_export_type_settings"] = "No additional export type settings.";
$L["blog"] = "Blog";
$L["your_account"] = "Your Account";
$L["your_data_sets"] = "Your Data Sets";
$L["data_types"] = "Data Types";
$L["account_type"] = "Account type";
$L["num_saved_data_sets"] = "Num Saved Data Sets";
$L["total_rows_generated"] = "Total rows generated";
$L["date_account_created"] = "Date account created";
$L["no_saved_data_sets"] = "You don't have any saved data sets.";
$L["data_set_name"] = "Data Set Name";
$L["data_created"] = "Data Created";
$L["last_modified"] = "Last Modified";
$L["public_q"] = "Public?";
$L["rows_generated"] = "Rows Generated";
$L["save_data_set_to_link"] = "De-<i>nied</i>. In order to share this Data Set with other people, you need to save it first.";
$L["make_data_set_public_agreement"] = "I understand that to share this Data Set, I need to make it public.";
$L["clear_the_page"] = "Clear the Page";
$L["link_to_this_data_set"] = "Link to this Data Set";
$L["save"] = "Save";
$L["your_data_set_name_here"] = "Your data set name here...";
$L["country_specific_data"] = "Country-Specific Data";
$L["data_set_help"] = "This is where you define exactly what kind of data you want to generate. Try filling in a row or two and click the Generate button. You'll get the hang of it pretty fast.";
$L["export_types"] = "Export Types";
$L["export_types_help"] = "This section lets you control the format of your generated data. Each format may provide different options to let you tailor the output to exactly what you want.";
$L["hide_data_format_options"] = "hide data format options";
$L["show_data_format_options"] = "show data format options";
$L["rows"] = "rows";
$L["generate_in_page"] = "Generate in-page";
$L["new_window_or_tab"] = "New window/tab";
$L["prompt_to_download"] = "Prompt to download";
$L["cancel"] = "cancel";
$L["regenerate"] = "Regenerate";
$L["generated_X_of_Y_results"] = "Generated <span id=\"gdGenerateCount\"></span> of <span id=\"gdGenerateTotal\"></span> results";
$L["plugins"] = "Plugins";
$L["reset_plugins"] = "Reset plugins";
$L["misc"] = "Misc";
$L["theme"] = "Theme";
$L["developer"] = "Developer";
$L["developer_intro"] = "The following sections lets you fine-tune what you see in your javascript console for development purposes.";
$L["list_console_warn_events"] = "List console.warn() events";
$L["list_module_publish_events"] = "List module <b>publish</b> events";
$L["list_module_subscribe_events"] = "List module <b>subscribe</b> events";
$L["list_core_events"] = "List <b>core</b> events";
$L["limit_pub_sub_console_messages"] = "Limit pub/sub console messages to specific modules:";
$L["all_data_type_plugins"] = "All Data Type plugins";
$L["all_export_type_plugins"] = "All Export Type plugins";
$L["about_title"] = "About";
$L["about_para1"] = "Sometimes you need fake data for things like testing software, populating databases and creating realistic-looking mockups. For text, we have <i>lorem ipsum</i>; but for everything else...? This tool was written to provide a quick and simple way to let you generate large volumes of custom data in whatever format you require.";
$L["about_para2"] = "The <b>Generate</b> page contains the entire script: just fill in the various fields in the page to construct the data set you're interested in, then click the Generate button. And hey presto! Easy, huh?";
$L["extend_id"] = "Extend it";
$L["about_para3"] = "The out-the-box script contains the sort of functionality you generally need. But nothing's ever complete - maybe you need to generate random esoteric math equations, pull random tweets or display random images from Flickr with the word \"Red-backed vole\" in the title. Who knows. Everyone's use-case is different.";
$L["about_para4"] = "With this in mind, the new version of the script (3.0.0+) was designed to be fully extensible: developers can write their own Data Types to generate new types of random data, and even customize the Export Types - i.e. the format in which the data is output. For people interested in generating more accurate localized geographical data, they can also add new Country plugins that supply region names (states, provinces, territories etc), city names and postal/zip code formats for their country of choice.";
$L["about_para5"] = "For more information on how to extend it, visit the <a href=\"http://benkeen.github.io/generatedata/developer.html\">developer documentation</a>.";
$L["a_few_links"] = "A few links";
$L["fork_on_github"] = "Fork the code on github";
$L["read_developer_doc"] = "Read the developer documentation";
$L["goto_website"] = "Go to the website";
$L["latest_project_news"] = "Latest project news";
$L["last_edited"] = "last edited";
$L["last_saved"] = "last saved";
$L["please_confirm"] = "Please confirm";
$L["yes"] = "Yes";
$L["no"] = "No";
$L["not_saved"] = "not saved";
$L["please_enter_all"] = "Please enter all";
$L["export_type_validate_error"] = "Ack! There was an error in the Export Type's validate() function. Sorry, we can't proceed - call a developer!";
$L["close"] = "Close";
$L["anonymous_admin_account"] = "Anonymous admin account";
$L["report_bug"] = "Report a bug";
$L["developer_doc"] = "Developer doc";
$L["no_data_types_found"] = "No Data Types found";
$L["no_export_types_found"] = "No Export Types found";
$L["installation_error"] = "Installation error";
$L["continue_rightarrow"] = "Continue &raquo;";
$L["check_database_info"] = "Check Database Info";
$L["create_settings_file"] = "Create Settings File";
$L["complete_excl"] = "Complete!";
$L["installation_step2_intro"] = "So far so good! Now click the button below to create your <b>settings.php</b> file. This file is stored in the root folder of this application and is the only place (other than the database) that stores custom information about your installation.";
$L["create_file_rightarrow"] = "Create File &raquo;";
$L["installation_step3_intro"] = "There are three types of user account.";
$L["single_anonymous_user_account"] = "Single, anonymous user account";
$L["single_user_account_requires_login"] = "Single user account, requires login";
$L["multiple_accounts"] = "Multiple accounts";
$L["goto_script_rightarrow"] = "Go to script &raquo;";
$L["enter_user_account_details"] = "Please enter your user account details below.";
$L["installation_plugin_intro"] = "Almost done! Now we're going to install the plugins: these are what make the Data Generator actually <i>useful</i> - i.e. the type of data you can generate (Data Types), the format of the generated data (Export Types) and all the Country-specific data like regions and cities. Feel free to unselect anything you don't think you'll need.";
$L["install_plugins_rightarrow"] = "Install Plugins &raquo;";
$L["installation_complete_text"] = "The Data Generator has been successfully installed! Click the button below to go to the script.";
$L["please_login"] = "Please Login";
$L["forgotten_your_password_q"] = "Forgotten your password?";
$L["admin"] = "Admin";
$L["user"] = "User";
$L["logout"] = "Logout";
$L["create_account"] = "Create Account";
$L["edit"] = "Edit";
$L["delete"] = "Delete";
$L["no_user_accounts_defined"] = "No user accounts added yet.";
$L["num_records_generated"] = "Generated";
$L["last_logged_in"] = "Last Logged In";
$L["date_created"] = "Date Created";
$L["user_account_section_intro"] = "This section lets you create any number of users accounts to allow people access to the script. Only you are able to create or delete accounts.";
$L["email_user_login_info"] = "Email the user their login information";
$L["create_account_rightarrow"] = "Create Account &raquo;";
$L["delete_account"] = "Delete Account";
$L["update_account"] = "Update Account";
$L["confirm_delete_user_account"] = "Are you sure you want to delete this user account?";
$L["success"] = "success";
$L["error"] = "error";
$L["invalid_password"] = "Sorry, that password is not correct. Please try again.";
$L["reset_password"] = "Reset Password";
$L["password_reset_email_content1"] = "Your password has been reset. You may use the following password to log in: %1";
$L["password_reset_email_content2"] = "Please change it once you've logged in.";
$L["password_reset_complete"] = "Your password has been reset and you have been emailed the new password.";
$L["email_not_sent"] = "We were unable to send the email notification.";
$L["user_not_found"] = "Sorry, we were unable to identify you.";
$L["account_created_msg"] = "An account has been created for you.";
$L["account_created"] = "Account Created";
$L["invalid_account_id"] = "The Account ID is not valid.";
$L["account_info"] = "Account Info";
$L["account_updated"] = "Your account has been updated.";
$L["password_change_note"] = "You only need to fill the password fields in if you want to change it.";
$L["info_and_stats"] = "Info and Stats";
$L["account_settings"] = "Account Settings";
$L["enter_email_address_to_reset_password"] = "Enter your email address below to reset your password.";
$L["extend_it"] = "Extend it";
$L["africa"] = "Africa";
$L["asia"] = "Asia";
$L["europe"] = "Europe";
$L["north_america"] = "North America";
$L["central_america"] = "Central America";
$L["south_america"] = "South America";
$L["oceania"] = "Oceania";
$L["all_countries"] = "All countries";
$L["link_to_data_set"] = "Link to Data Set";
$L["login"] = "Login";
$L["forgot_password"] = "Forgot Password";
$L["admin_account"] = "Admin account";
$L["feature_enabled"] = "Enabled";
$L["anonymous_access"] = "Anonymous access";
$L["anonymous_user_desc"] = "Anonymous users can use the script but have limited access: they cannot save, link to their data sets or generate more than 100 rows at a time.";
$L["anonymous_user_message"] = "Message to display to anonymous users when trying to save:";
$L["anonymous_user_default_message"] = "Please login or email someone@yoursite.com to get a user account.";
$L["login_url_c"] = "Login URL:";
$L["email_c"] = "Email:";
$L["password_c"] = "Password:";
$L["no_account_found"] = "Sorry, that account wasn't found.";
$L["update"] = "Update";
$L["documentation"] = "Documentation";
$L["install_user_doc_link"] = "For more detailed information about the installation process, check out our <a href=\"http://benkeen.github.io/generatedata/install.html\" target=\"_blank\">user documentation</a>.";
$L["num_rows_too_large"] = "Sorry, you're limited to generating <b>%1</b> rows at a time. Click generate to continue.";
$L["fork_this_project_on_github"] = "Fork this project on Github";
$L["download"] = "Download";
$L["loading"] = "Loading...";
$L["validation_account_already_exists"] = "Sorry, an account with that email address already exists.";
$L["validation_not_logged_in"] = "You don't appear to be logged in. Please try logging in again.";
$L["validation_invalid_permissions"] = "You don't have permissions to do this.";
$L["installation_failed_create_settings_file"] = "The script was unable to create your <b>settings.php</b> file.";
$L["installation_failed_create_settings_file_msg"] = "This usually occurs when it fails to have permissions to write to the folder. Please manually create this file and place it in the base folder of the Data Generator. When you have done this, button below to continue installing.";
$L["confirm_file_exists"] = "Confirm File Exists";
$L["reset_plugins_with_bundling"] = "<b>You have bundling/minification enabled</b>. If you click the Reset Plugins button you will need to run <i>grunt</i> to recreate the bundles. For more information <a href=\"http://benkeen.github.io/generatedata/developer.html#bundling\" target=\"_blank\">read this documentation page</a>. If you have any problems, you may want to turn off bundling.";
$L["cannot_change_num_rows"] = "Sorry, you're not allowed to change the number of generated rows.";
$L["zip_q"] = "Zip?";
$L["please_enter_data_set_name"] = "Please enter the name of the new Data Set.";
$L["delete_1_data_set"] = "Delete 1 Data Set";
$L["delete_N_data_sets"] = "Delete %1 Data Sets";

// new in 3.1.1
$L["credit_card_data"] = "Credit Card Data";

// new in 3.2.1
$L["history"] = "History";

// 3.2.2
$L["validation_no_data_types"] = "Please select at least one Data Type.";
$L["validation_no_export_types"] = "Please select at least one Export Type.";
$L["validation_no_countries"] = "Please select at least one Country.";

// changed
$L["plugins_intro"] = "Check/uncheck the rows to determine which functionality you'd like to see in the interface.";
$L["notify_settings_updated"] = "Your settings have been updated. Refresh the page to ensure you have the latest content.";

// 3.3.0
$L["database_port"] = "Database Port";
$L["validation_no_database_port"] = "Please enter the database port.";


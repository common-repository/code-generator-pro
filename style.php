<div style="width: 389px;"><?php echo $code_generator_display_codes_generator_name; ?><br /><div style="float: left;"># of Codes Available: <?php echo $code_generator_display_num_codes; ?></div><div style="float: right;"><a href="<?php echo $code_generator_display_url[0]; ?>" target="_blank">Get Password</a></div><div style="clear: both;"></div><form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">Password:<br /> <input type="text" name="code_generator_generate_password" size="60" /><br /> Code:<br /> <input type="text" name="code_generator_generate_code" size="60" value="<?php echo $code_generator_generate_code->code; ?>" /><br /><br /> <input type="hidden" name="code_generator_generate_generator_id" value="<?php echo $code_generator_display_codes_generator_id; ?>"><input type="submit" name="code_generator_generate_generate" value="Generate"></form></div>
<div style="width: 300px; margin: auto;">
	<h4>ข้อ 1.1</h4>
	<div style="text-align:right; ">
		<?php
			for($i = 1; $i <= 5; $i++){
				for ($j=1; $j <= $i; $j++) {
					echo "O ";
				}
				echo "<br>";
			}
		?>
	</div>
</div>

<div style="width: 300px; margin: auto;">
	<h4>ข้อ 1.1</h4>
	<div style="text-align: center;">
		<?php 
			for ($i=1; $i < 11; $i++) {
				if($i%2 == 0){
					for ($j=1; $j < $i; $j++) { 
						echo "O ";
					}
					echo "<br>";
				}
			}
		?>
	</div>
</div>

<div style="width: 300px; margin: auto;">
	<h4>ข้อ 2.1</h4>
	<?php 
		$sarary = 10000;
		if ($sarary < 10000) {
			$sarary = $sarary + 200;
		}else if($sarary < 11000){
			$sarary += 200; //เนื่องจากเป็นการใช้เงื่อนไข if else ถ้าเข้าเงื่อนไข if และไม่ทำงานไนเงื่อนไข else
		}else if($sarary < 12000){
			$sarary += 300; //เนื่องจากเป็นการใช้เงื่อนไข if else เงื่อนไขนี้จึงไม่ทำงาน
		}
		echo "เงินเดือน = ".$sarary;
	?>
</div>

<div style="width: 300px; margin: auto;">
	<h4>ข้อ 2.2.1</h4>
	<?php 
		$bath = 100;
		echo "Output = ".($bath==300 ? "300" : "200");
	?>
</div>

<div style="width: 300px; margin: auto;">
	<h4>ข้อ 2.2.2</h4>
	<?php 
		$score = 9; $age = 10;
		echo "Your Score is : ".($score > 10 ? ($age > 10 ? "Average" : "Exceptional") : ($age > 10 ? "Horrible" : "Average"));
	?>
</div>

<div style="width: 300px; margin: auto;">
	<h4>ข้อ 3.1</h4>
	<?php 
		$data = array(
			10000 => 15000,
			15000 => 20000,
			"sarary" => 30000
		);
		$n = 1;
		foreach ($data as $value) {
			echo "value".$n." = ".$value."<br>";
			$sarary = $value;
			if ($sarary < 10000) {
				$sarary = $sarary + 200;
			}else if($sarary < 11000){
				$sarary += 200;
			}else if($sarary < 12000){
				$sarary += 300;
			}
			echo "เงินเดือน = ".$sarary."<br><br>";
			$n++;
		}
	?>
</div>

<div style="width: 300px; margin: auto;">
	<h4>ข้อ 3.2.1</h4>
	<?php 
		$marks =array(
			"mohammad"=>array(
				"physics"=>35,
				"maths"=>30,
				"chemistry"=>39
			),
			"qadir"=>array(
				"physics"=>30,
				"maths"=>32,
				"chemistry"=>29
			),
			"zara"=>array(
				"physics"=>31,
				"maths"=>22,
				"chemistry"=>39
			)
		);
		foreach ($marks as $value) {
			foreach ($value as $result) {
				if ($result == 35) {
					echo "Output = ".$result;
				}
			}
		}
		echo "<h4>ข้อ 3.2.2</h4>";
		$out="";
		foreach ($marks as $value) {
			foreach ($value as $result) {
				$out .= $result." ";
			}
		}
		echo "Output = ".$out;
	?>
</div>

<div style="width: 1000px; margin: auto;">
	<style>
		/* หมายเหตุ : พื้นที่ของรูปสี่เหลี่ยมผืนผ้า ไม่ได้คิดค่าในส่วนของ border */
		.box{
			width: 240px;
			height: 200px;
			border:1px solid #000;
			margin: 0 5px;
		}
		.flex-box{
			display: flex;
			justify-content: center;
		}
	</style>
	<h4>ข้อ 4</h4>
	<div class="flex-box">
		<div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
	</div>
</div>

<div style="width: 1000px; margin: auto;">
	<h4>ข้อ 5.1</h4>
	<img src="ER-Diagram.jpg" alt="" width="100%">

	<h4>ข้อ 5.2</h4>
	INSERT INTO ตารางสาขา(ชื่อฟิลด์) VALUES('เชียงใหม่')<br>
	INSERT INTO ตารางสาขา(ชื่อฟิลด์) VALUES('เชียงราย')<br>
	INSERT INTO ตารางสาขา(ชื่อฟิลด์) VALUES('ภูเก็ต')<br>

	<h4>ข้อ 5.3</h4>
	DELETE FROM ตารางตำแหน่ง WHERE ตำแหน่ง(ชื่อฟิลด์)='sale'

	<h4>ข้อ 5.4</h4>
	UPDATE ตารางสาขา SET สาขา(ชื่อฟิลด์)='นราธิวาส' WHERE สาขา(ชื่อฟิลด์)='ปัตตานี'

	<h4>ข้อ 5.5</h4>
	SELECT * FROM ตารางพนักงาน LIMIT 400

	<h4>ข้อ 5.6</h4>
	SELECT * FROM ตารางพนักงาน WHERE สาขา(ชื่อฟิลด์) = 'ระยอง' OR สาขา(ชื่อฟิลด์) = 'กรุงเทพ

	<h4>ข้อ 5.7</h4>
	SELECT * FROM ตารางพนักงาน WHERE สาขา(ชื่อฟิลด์) = 'เลย' OR ตำแหน่ง(ชื่อฟิลด์) = 'programmer

	<h4>ข้อ 5.8</h4>
	SELECT สาขา(ชื่อฟิลด์),ตำแหน่ง(ชื่อฟิลด์) FROM ตารางพนักงาน
</div>

<div style="width: 1000px; margin: auto;">
	<h4>ข้อ 6</h4>
	เนื่องจากชอบคอมพิวเตอร์, เล่นเกม

	<h4>ข้อ 7</h4>
	ค้นหาข้อมูลจากอินเตอร์เน็ต สอบถามพี่ๆ ที่ทำงาน

	<h4>ข้อ 8</h4>
	เป็นการแยกส่วนที่ติดต่อกับฐานข้อมูล(Model) แยกออกจากส่วนการแสดงผล(View) โดยมีตัวกลางสำหรับเชื่อมข้อมูลของทั้งสองตัว(Controller) เพื่อที่สามารถเรียกใช้งานบางฟังก์ชันที่มีการทำงานเหมือนกัน โดยไม่ต้องเขียนฟังก์ชั้นนั้นๆ ขึ้นมาใหม่

	<h4>ข้อ 9</h4>
	Git เป็นตัวจัดการโปรเจคงาน สำหรับโปรเจคงานที่มีการร่วมกันทำงานของหลายๆคน และเพื่อให้เนื่องานเป็นเวอร์ชั่นล่าสุดสำหรับทุกคน เนื่องจากจะมีการอัตเดตงานที่มีคนทำการอัปโหลดล่าสุด และตรวจสอบการซ้อนทับของงานได้ และไม่อนุญาตให้คนอัปโหลดงานได้ ถ้ามีการทับกันของงานเดียวกัน กรณีมีปัญหาการทับกันของงาน จะสามารถอัปโหลดงานส่งได้ต้องทำการดึงข้อมูลลงมาก่อน แล้วตรวจสอบส่วนของงานที่เกิดปัญหา แล้วให้ทำการแก้ไขก่อนจึงจพสามารถอัปโหลดงานส่งได้
	<p>
		<strong>ตัวอย่าง Git เช่น</strong><br>
		Github<br>
		GitLab<br>
		Bitbucket(เคยใช้)<br>
	</p>

	<h4>ข้อ 10</h4>
	Docker คือการจำลอง server ตัวหนึ่งขึ้นมาสำหรับการทำงานงานหนึ่ง โดยที่สามารถนำไปใช้งาน หรือเปิดกับเครื่องอื่นๆได้ โดยจะตัดปัญหาเรื่องเวอร์ชั่นโปรแกรมไม่เหมือนกัน และใช้ทรัพยากรของเครื่องน้อย <strong>(ไม่เคยใช้)</strong>

	<h4>ข้อ 11</h4>
	Composer เป็นเครื่องมือ ของ PHP ใช้จัดการ library ที่ต้องการใช้ในโปรเจ็ค ลักษณะการใช้งานคือ ให้เราระบุ library ที่โปรเจ็คของเราต้องการไว้ในไฟล์ composer.json จากนั้น composer จะทำการติดตั้งหรืออัพเดท library ที่เราต้องการให้เลย ช่วยให้เราจัดการกับ library ได้ง่ายขึ้น <strong>(ไม่เคยใช้)</strong>

	<h4>ข้อ 12</h4>
	Scss ทำให้เราสามารถเขียน css ในรูปแบบที่ซับซ้อนขึ้นได้ เช่นสามารถ CSS Selector แบบซ้อนกันได้, สามารถสร้างตัวแปร เพื่อนำค่าไปใช้ในส่วนอื่นๆได้ โดยเมื่อเขียนเสร็จแล้ว จะใช้ CSS Preprocessor ที่จะแปลงเป็น CSS ธรรมดาก่อนถึงจะนำไปใช้งานได้

	<h4>ข้อ 13</h4>
	ในห้องทุกคนคือคนเก่ง เพราะทุกคนสามารถเรียนรู้ได้

	<h4>ข้อ 14</h4>
	ไม่เคย

	<h4>ข้อ 15</h4>
	Codeigniter มีความเข้าโครงสร้างของตัว Framework มากกว่าตัวอื่นๆ

	<h4>ข้อ 16</h4>
	เป็นเว็บไซต์สำหรับตรวจสอบความเร็วในการโหลดหน้าเว็บ และแจ้งเหตุผลที่ทำให้เว็บไซต์โหลดช้าผิดปกติ <strong>(เคยใช้)</strong>

	<h4>ข้อ 17</h4>
	SEO เป็นการจัดการเว็บไซต์ให้ติดอันดับในการค้นหาจาก Search engine (ไม่ทราบรายละเอียดส่วนลึก เคยทำเฉพาะ SEM)
</div>

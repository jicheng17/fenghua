<?php
#**************************************************************************
#  openSIS is a free student information system for public and non-public 
#  schools from Open Solutions for Education, Inc. web: www.os4ed.com
#
#  openSIS is  web-based, open source, and comes packed with features that 
#  include student demographic info, scheduling, grade book, attendance, 
#  report cards, eligibility, transcripts, parent portal, 
#  student portal and more.   
#
#  Visit the openSIS web site at http://www.opensis.com to learn more.
#  If you have question regarding this system or the license, please send 
#  an email to info@os4ed.com.
#
#  This program is released under the terms of the GNU General Public License as  
#  published by the Free Software Foundation, version 2 of the License. 
#  See license.txt.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  You should have received a copy of the GNU General Public License
#  along with this program.  If not, see <http://www.gnu.org/licenses/>.
#
#***************************************************************************************
include('../../RedirectModulesInc.php');
$menu['scheduling']['admin'] = array(
						'scheduling/Schedule.php'=>'Course Schedule / 选课',
      //                   'scheduling/ViewSchedule.php'=>'View Schedule',
						//'scheduling/Requests.php'=>'Student Requests',
						// 'scheduling/MassSchedule.php'=>'Group Schedule',
						// 'scheduling/MassRequests.php'=>'Group Requests',
						// 'scheduling/MassDrops.php'=>'Group Drops',
						'scheduling/Scheduler.php'=>'Run Scheduler',
						1=>'Reports / 报表',
						//'scheduling/PrintSchedules.php'=>'Schedules Report / 选课报表',
						'scheduling/PrintClassLists.php'=>'Class Report / 班级报表',
						// 'scheduling/PrintClassPictures.php'=>'Print Class Pictures',
						// 'scheduling/PrintRequests.php'=>'Print Requests',
						'scheduling/ScheduleReport.php'=>'Course Report / 报名统计'
						// 'scheduling/RequestsReport.php'=>'Requests Report',
						// 'scheduling/UnfilledRequests.php'=>'Unfilled Requests',
						// 'scheduling/IncompleteSchedules.php'=>'Incomplete Schedules',
						// 'scheduling/AddDrop.php'=>'Add / Drop Report',
						// 2=>'Setup',
						
						
					);

$menu['scheduling']['teacher'] = array(
						'scheduling/Schedule.php'=>'Course Schedule / 选课',
                        //'scheduling/ViewSchedule.php'=>'ViewSchedule',
						1=>'Reports / 报表',
						'scheduling/PrintSchedules.php'=>'Schedules Report / 选课报表',
						'scheduling/PrintClassLists.php'=>'Class Report / 班级报表',
						'scheduling/PrintClassPictures.php'=>'Class Pictures / 班级照片'
					);

$menu['scheduling']['parent'] = array(
						//'scheduling/ViewSchedule.php'=>'Schedule',
						'scheduling/PrintClassPictures.php'=>'Class Pictures',
						'scheduling/Requests.php'=>'Student Requests',
                        'scheduling/StudentScheduleReport.php'=>'Schedule Report'
					);

$exceptions['scheduling'] = array(
						'scheduling/Requests.php'=>true,
						'scheduling/MassRequests.php'=>true,
						'scheduling/Scheduler.php'=>true,
                        'scheduling/StudentScheduleReport.php'=>'Schedule Report'
					);
?>

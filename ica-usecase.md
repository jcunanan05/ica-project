# Use Case for our Informatics Comprehensive Assesment
	Case to case scenarios for informatics comprehensive assessment. This is used for
	program flow to comprehend database design.

### For Login:
	* I can type my student ID or email and my password
	my student ID: 0981-1234-1234


## Registrar:
	* i can create a user, edit, delete,
	* i can create a subject
	* i can create a course, but for now all resources is for BSIT		
	* i can assign lecturers to a subject or subjects
	* i can view Learning resources and Comprehensive Exam uploaded by Lecturer
				- i can view if uploaded topic by lecturer matches the syllabus.
				- i can approve, disapprove topic and provide reason/feedback
	* i can see passers wall

	* i can generate reports
		-reports of number of users, lecturers and students
		-reports of exam passers
		-reports of topics created by lecturer
		-reports of active students
		-reports of number of active students per subject



	* i can add edit delete school curriculum
		-course
		-year
		-semester
		-subject
			- subject_topic

	* send activation code when done adding or editing 20 activation characters **for now**
				 <!-- sending single activation or sending to many at once. -->

## Lecturer:
	* i can create topic on my subject, must be related on a curriculum
			<!-- on the syllabus -->
		-one to many
	* for a topic,
		i must assign a main embed youtube link (required)
		i can create a lecturer notes for other information (option)
		i can upload attachments (option)
		i must create a short quiz (required)
	* for a short quiz
		i can see which questions students fail to answer
		i can see which questions students succeed
	* for major exam
		i cannot create major exams when i didn't reach the topic limit //?
		i can see which questions students fail to answer
		i can see which questions students succeed
	* reports
		i can see my students in the subject
		i can see my students progress
			- finished short quizzes and score
			- major exam score


### A short quiz
	* with a question and choices per item provided by the lecturer
		- is a multiple choice quiz
		- items are randomized
		- 3 to 4 items only //?
		- can have a timer (optional)


### A major exam
	* came from short quizzes items chosen by the lecturer
	* randomized items and options
	* must have a timer set by lecturer per item
	* multiple choice


## Student:
	* i can view a subject    //? view only not enroll?
		- i can view a topic
			- i can read, watch, and download resources.
			- i can take short quizzes
			- i can take major exam when short quizzes are done
		- i can view passers for major exam for each subject

	* i can view my scores
		- share them to facebook

	* for short quizzes
		- i cannot take short quiz when i didn't take the previous quiz

	* i can view my co-subjects passers

	* i am assigned to a course

	* i can continue the exam if it has been interupted


## Users:
	* i can edit my password, and other details
	* change my email

	* i must activate my account

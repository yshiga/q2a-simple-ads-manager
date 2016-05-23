<?php


class qa_html_theme_layer extends qa_html_theme_base {

        //ad after question, just before answers
        function q_view($q_view)
        {
			  qa_html_theme_base::q_view($q_view);


			  if (qa_opt('pt_q2a_ad_after_question')
          && (qa_opt('pt_q2a_only_not_login_users') && !qa_is_logged_in())
        )
			   {
           $index = rand (0, 3);
           $this->output(qa_opt('pt_q2a_ad_after_question_codebox_' . $index));
			   }
        }
		// End of q_view()

        //ad after menu navigation bar, just after horizontal line.
        function header()
        {
           qa_html_theme_base::header();

		   if (qa_opt('pt_q2a_ad_after_menu_bar')
          && (qa_opt('pt_q2a_only_not_login_users') && !qa_is_logged_in())
       )
		   {
				$this->output(qa_opt('pt_q2a_ad_after_menu_bar_codebox'));
		   }
        }
		// End of header()

        //ad after all answers, just before related questions
        function a_list($a_list)
        {
            qa_html_theme_base::a_list($a_list);

		   if (qa_opt('pt_q2a_ad_after_all_answers')
          && (qa_opt('pt_q2a_only_not_login_users') && !qa_is_logged_in())
       )
		   {
				$this->output(qa_opt('pt_q2a_ad_after_all_answers_codebox'));
		   }
        }
		// end of a_list()

		//ad after all questions
        function q_list_and_form($q_list)
        {

           qa_html_theme_base::q_list_and_form($q_list);

		   if (qa_opt('pt_q2a_ad_after_all_questions')
          && (qa_opt('pt_q2a_only_not_login_users') && !qa_is_logged_in())
       )
		   {
				$this->output(qa_opt('pt_q2a_ad_after_all_questions_codebox'));
		   }
        }
		// end of q_list_and_form()

        function sidebar()
        {
           qa_html_theme_base::sidebar();

		   if (qa_opt('pt_q2a_ad_sidebar')
          && (qa_opt('pt_q2a_only_not_login_users') && !qa_is_logged_in())
       )
		   {
				$this->output(qa_opt('pt_q2a_ad_sidebar_codebox'));
		   }
        }
		// End of sidebar()

}
/*
	Omit PHP closing tag to help avoid accidental output
*/

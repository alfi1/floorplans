<?php

// Create an array to hold the subjects - useful for populating the form
// To be included in the main navigation page

$locations = array(

// Second floor

        "a_classmark" => array (
        "title"=>"Classmark A",
        "code"=>"a_classmark",
        "floor"=>"second",
        "subject"=>"Generalia, general periodicals, museums",
        ),

        "b_classmark" => array (
        "title"=>"Classmark B",
        "code"=>"b_classmark",
        "floor"=>"second",
        "subject"=>"Philosophy, Religion",
        ),

        "c_classmark" => array (
        "title"=>"Classmark C",
        "code"=>"c_classmark",
        "floor"=>"second",
        "subject"=>"Auxiliary Sciences of History",
        ),

        "d_classmark" => array (
        "title"=>"Classmarks D - DF",
        "code"=>"d_classmark",
        "floor"=>"second",
        "subject"=>"History: European, World",
        ),


//First floor

        "d1_classmark" => array (
        "title"=>"Classmarks DG - DX",
        "code"=>"d_classmark",
        "floor"=>"first",
        "subject"=>"History : general and Old World, Asian, African, Australasian",
        ),

        "e_classmark" => array (
        "title"=>"Classmark E",
        "code"=>"e_classmark",
        "floor"=>"first",
        "subject"=>"History: US",
        ),

        "f_classmark" => array (
        "title"=>"Classmark F",
        "code"=>"f_classmark",
        "floor"=>"first",
        "subject"=>"History: US local history, British America, Canada, Dutch America, French America, Latin America",
        ),

        "ggm_classmark" => array (
        "title"=>"Classmarks G - GM",
        "code"=>"g_classmark",
        "floor"=>"first",
        "subject"=>"Geography",
        ),

        "gnv_classmark" => array (
        "title"=>"Classmarks GN - GV",
        "code"=>"g_classmark",
        "floor"=>"first",
        "subject"=>"Anthropology",
        ),

        "h_classmark" => array (
        "title"=>"Classmark H",
        "code"=>"h_classmark",
        "floor"=>"first",
		"subject"=>"Sociology",
        ),
		
		//Separate Economics from Sociology.  18/09/2018
		"h2_classmark" => array (
        "title"=>"Classmark H",
        "code"=>"h_classmark",
        "floor"=>"first",
		"subject"=>"Economics",
        ),

		// Add an entry for Business and Management
		"h3_classmark" => array (
        "title"=>"Classmark H",
        "code"=>"h_classmark",
        "floor"=>"first",
		"subject"=>"Business and Management",
        ),
		
        "j_classmark" => array (
        "title"=>"Classmark J",
        "code"=>"j_classmark",
        "floor"=>"first",
        "subject"=>"Politics",
        ),
		
		"j2_classmark" => array (
        "title"=>"Classmark JE",
        "code"=>"j_classmark",
        "floor"=>"first",
        "subject"=>"International Relations",
        ),

        "k_classmark" => array (
        "title"=>"Classmark K",
        "code"=>"k_classmark",
        "floor"=>"first",
        "subject"=>"Law",
        ),

        "l_classmark" => array (
        "title"=>"Classmark L",
        "code"=>"l_classmark",
        "floor"=>"first",
        "subject"=>"Education",
        ),

        "m_classmark" => array (
        "title"=>"Classmark M",
        "code"=>"m_classmark",
        "floor"=>"first",
        "subject"=>"Music",
        ),

        "n_classmark" => array (
        "title"=>"Classmark N",
        "code"=>"n_classmark",
        "floor"=>"first",
        "subject"=>"Fine Arts",
        ),

// Ground floor

	"p_classmark" => array (
	"title"=>"Classmark P",
	"code"=>"p_classmark",
	"floor"=>"ground",
	"subject"=>"Linguistics, language in general",
	),

	"pa_classmark" => array (
	"title"=>"Classmark PA",
	"code"=>"pa_classmark",
	"floor"=>"ground",
	"subject"=>"Classical languages and literatures",
	),

	"pb_classmark" => array (
	"title"=>"Classmark PB",
	"code"=>"pb_classmark",
	"floor"=>"ground",
	"subject"=>"Celtic languages and literatures",
	),

	"pc_classmark" => array (
	"title"=>"Classmark PC",
	"code"=>"pc_classmark",
	"floor"=>"ground",
	"subject"=>"Romanic languages : Italian, French, Spanish, Portuguese",
	),

	"pf_classmark" => array (
	"title"=>"Classmark PF",
	"code"=>"pf_classmark",
	"floor"=>"ground",
	"subject"=>"English language and literature",
	),
	
	"pg_classmark" => array (
	"title"=>"Classmark PG",
	"code"=>"pg_classmark",
	"floor"=>"ground",
	"subject"=>"Slavonic languages and literatures",
	),
	
	"ps_classmark" => array (
	"title"=>"Classmark PS",
	"code"=>"ps_classmark",
	"floor"=>"ground",
	"subject"=>"American language and literature",
	),

	"pl-ppk_classmark" => array (
	"title"=>"Classmarks PL-PPK",
	"code"=>"pl-ppk_classmark",
	"floor"=>"ground",
	"subject"=>"Non-European languages and literatures",
	),
	
	"pn_classmark" => array (
	"title"=>"Classmark PN",
	"code"=>"pn_classmark",
	"floor"=>"ground",
	"subject"=>"General literature, theatre, cinema",
	),	

	// Add in 'Film and Media.  23/10/2018
	
	"pn2_classmark" => array (
	"title"=>"Classmark PN",
	"code"=>"pn_classmark",
	"floor"=>"ground",
	"subject"=>"Media and Film",
	),	
		
	"pq1-3_classmark" => array (
	"title"=>"Classmarks PQ 1-3",
	"code"=>"pq1-3_classmark",
	"floor"=>"ground",
	"subject"=>"French literature",
	),	

	"pq4-5_classmark" => array (
	"title"=>"Classmarks PQ 4-5",
	"code"=>"pq4-5_classmark",
	"floor"=>"ground",
	"subject"=>"Italian literature",
	),		

	"pq6-9_classmark" => array (
	"title"=>"Classmarks PQ 6-9",
	"code"=>"pq6-9_classmark",
	"floor"=>"ground",
	"subject"=>"Spanish and Portuguese literatures",
	),	

	"pr_classmark" => array (
	"title"=>"Classmark PR",
	"code"=>"pr_classmark",
	"floor"=>"ground",
	"subject"=>"Overseas literatures in English",
	),
	
	"pt_classmark" => array (
	"title"=>"Classmark PT",
	"code"=>"pt_classmark",
	"floor"=>"ground",
	"subject"=>"German, Dutch, Flemish & Scandanavian literatures",
	),
	
	"pz1-2_classmark" => array (
	"title"=>"Classmarks PZ 1-2",
	"code"=>"pz1-2_classmark",
	"floor"=>"ground",
	"subject"=>"Science Fiction Book Club titles",
	),	

	"pz3-9_classmark" => array (
	"title"=>"Classmarks PZ 3-9",
	"code"=>"pz3-9_classmark",
	"floor"=>"ground",
	"subject"=>"Children’s Literature",
	),

	"q_classmark" => array (
	"title"=>"Classmark Q",
	"code"=>"q_classmark",
	"floor"=>"ground",
	"subject"=>"General science",
	),

	"qa_classmark" => array (
	"title"=>"Classmark QA",
	"code"=>"qa_classmark",
	"floor"=>"ground",
	"subject"=>"Systems analysis and control theory",
	),

	"qb_classmark" => array (
	"title"=>"Classmark QB",
	"code"=>"qb_classmark",
	"floor"=>"ground",
	"subject"=>"Astronomy",
	),
	
	"qc_classmark" => array (
	"title"=>"Classmark QC",
	"code"=>"qc_classmark",
	"floor"=>"ground",
	"subject"=>"Terrestrial and cosmic physics",
	),	

	"qd_classmark" => array (
	"title"=>"Classmark QD",
	"code"=>"qd_classmark",
	"floor"=>"ground",
	"subject"=>"Mathematics: pure",
	),
	
	"qe_classmark" => array (
	"title"=>"Classmark QE",
	"code"=>"qe_classmark",
	"floor"=>"ground",
	"subject"=>"Mathematics: applied",
	),

	// Separate Computing from applied Maths. 18/09/2018
	"qe2_classmark" => array (
	"title"=>"Classmark QE",
	"code"=>"qe_classmark",
	"floor"=>"ground",
	"subject"=>"Computing",
	),
	
	"qg_classmark" => array (
	"title"=>"Classmark QG",
	"code"=>"qg_classmark",
	"floor"=>"ground",
	"subject"=>"Physics",
	),	

	"qj_classmark" => array (
	"title"=>"Classmark QJ",
	"code"=>"qj_classmark",
	"floor"=>"ground",
	"subject"=>"Chemistry",
	),	
	
	"qm_classmark" => array (
	"title"=>"Classmark QM",
	"code"=>"qm_classmark",
	"floor"=>"ground",
	"subject"=>"Biochemistry",
	),	
	
	"qp_classmark" => array (
	"title"=>"Classmark QP",
	"code"=>"qp_classmark",
	"floor"=>"ground",
	"subject"=>"Biology",
	),	

	"qr_classmark" => array (
	"title"=>"Classmark QR",
	"code"=>"qr_classmark",
	"floor"=>"ground",
	"subject"=>"Microbiology",
	),		

	"qs_classmark" => array (
	"title"=>"Classmark QS",
	"code"=>"qs_classmark",
	"floor"=>"ground",
	"subject"=>"Botany",
	),	
	
	"qu_classmark" => array (
	"title"=>"Classmark QU",
	"code"=>"qu_classmark",
	"floor"=>"ground",
	"subject"=>"Zoology",
	),	

	"qy_classmark" => array (
	"title"=>"Classmark QY",
	"code"=>"qy_classmark",
	"floor"=>"ground",
	"subject"=>"Physiology: human",
	),
	
	"qz_classmark" => array (
	"title"=>"Classmark QZ",
	"code"=>"qz_classmark",
	"floor"=>"ground",
	"subject"=>"Psychology: experimental and developmental",
	),

        "r_classmark" => array (
        "title"=>"Classmark R",
        "code"=>"r_classmark",
        "floor"=>"ground",
        "subject"=>"Medicine",
        ),

        "s_classmark" => array (
        "title"=>"Classmark S",
        "code"=>"s_classmark",
        "floor"=>"ground",
        "subject"=>"Agriculture, horticulture, forestry",
        ),

        "t_classmark" => array (
        "title"=>"Classmark T",
        "code"=>"t_classmark",
        "floor"=>"ground",
        "subject"=>"Technology, applied sciences",
        ),

        "u_classmark" => array (
        "title"=>"Classmark U",
        "code"=>"u_classmark",
        "floor"=>"ground",
        "subject"=>"Military science",
        ),

        "v_classmark" => array (
        "title"=>"Classmark V",
        "code"=>"v_classmark",
        "floor"=>"ground",
        "subject"=>"Naval science",
        ),

      //  "y_classmark" => array (
      //  "title"=>"Classmark Y",
      //  "code"=>"y_classmark",
      //  "floor"=>"ground",
      //  "subject"=>"Statistical data",
      //  ),


        "z_classmark" => array (
        "title"=>"Classmark Z",
        "code"=>"z_classmark",
        "floor"=>"ground",
        "subject"=>"Books, librarianship, bibliography",
        )

);

?>


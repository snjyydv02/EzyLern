<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function raptraining()
    {
        return view('course.rapamirt');
    }
    public function mmtraining()
    {
        return view('course.mm');
    }

    public function compelteabap()
    {

        return view('course.completeabaphana');
    }
    public function abaphana()
    {
        return view('course.abaphana');
    }

    public function jobportal()
    {
        return view('course.jobportal');
    }
    public function downloadResume(Request $request)
    {
        // Form validation
        $validated = $request->validate([
            'email' => 'required|email',
            'courses' => 'required|string',
            'experience' => 'required|string',
        ]);

        // List of allowed emails for unlimited downloads
        $allowedEmails = [
            'pandeymanoj1503@gmail.com',
            'np0568847@gmail.com',
            'jatin.digivibrant@gmail.com',
        ];

        // Mapping of course and experience to the resume download links
        $resumeLinks = [
            'sap_mm' => [
                'fresher' => 'https://drive.google.com/drive/folders/1Xb6n_x4J5aPuXhCEpddFoZo3L1WbbtC6',
                '1' => 'https://drive.google.com/drive/folders/1fABQczfMhjoT2oNgvbjQlAytoRwhQ5CO',
                '2' => 'https://drive.google.com/drive/folders/1PqZeVzIeWRLtDhRGEWPgmdZPbYfVUTQR',
                '3' => 'https://drive.google.com/drive/folders/1pvaQkYY2qFkKpJ3a2IhokWJpudMd-ByQ',
                '4' => 'https://drive.google.com/drive/folders/1Mx0BMy_6t8rDsrUpN4UvNvtn6DNjOkC5',
                '5' => 'https://drive.google.com/drive/folders/1lbagGA65B157XNcs3EYeiNp8N6MpsSmG',
                '6' => 'https://drive.google.com/drive/folders/1HG0d0fSimECosVXhu9vCg6xdHSROUnDG',
            ],
            'sap_abap' => [
                'fresher' => 'https://drive.google.com/drive/folders/1gtETPKK1-YB-FZOguqORA79YdvikIxTL',
                '1' => 'https://drive.google.com/drive/folders/1x2sodfh7CjO726AQWB1C_H8eXpLhDKJF',
                '2' => 'https://drive.google.com/drive/folders/1f_B3p-4xE-37Fp_mf7QDiF8q4W79QsR0',
                '3' => 'https://drive.google.com/drive/folders/10DO2l_GapZLF0Q08OlR5AZ4w-F8PtLdk',
                '4' => 'https://drive.google.com/drive/folders/1dXlCvIhqeej-Xnkc_xFpvqlSH0tEKRVP',
            ],
            'sap_fico' => [
                'fresher' => 'https://drive.google.com/drive/folders/1uY9Z8yscMxXjBN_Z9Fm0P0KapFYxAJko',
                '1' => 'https://drive.google.com/drive/folders/1GTx9nn8cGmO1aec1FF1ylYoDq3_Y3-bB',
                '2' => 'https://drive.google.com/drive/folders/1SskOX_zPQpZ0ndIaymujshTo48iX4Z2V',
                '3' => 'https://drive.google.com/drive/folders/1rJ55I9YyYbn0zgk6K5Nfe3LySdSP98k0',
                '4' => 'https://drive.google.com/drive/folders/15BfA7yUAlDRaBjV84cHwD0_ThHkKNrTc',
                '4' => 'https://drive.google.com/drive/folders/15BfA7yUAlDRaBjV84cHwD0_ThHkKNrTc',
                '5' => 'https://drive.google.com/drive/folders/1RpS6LaTpagoYiDVJzjX0bExPhUm7CD_Q',
                '6' => 'https://drive.google.com/drive/folders/1hbmNKoWYFd-GHEdoTBhpv52j5GgNtgo7',
                '7' => 'https://drive.google.com/drive/folders/10su7swvFKrMW7t00LrhMac8U4u9mzZ8k',

            ],
            'sap_abap' => [
                'fresher' => 'https://drive.google.com/drive/folders/1gtETPKK1-YB-FZOguqORA79YdvikIxTL',
                '1' => 'https://drive.google.com/drive/folders/1x2sodfh7CjO726AQWB1C_H8eXpLhDKJF',
                '2' => 'https://drive.google.com/drive/folders/1SskOX_zPQpZ0ndIaymujshTo48iX4Z2V',
                '3' => 'https://drive.google.com/drive/folders/10DO2l_GapZLF0Q08OlR5AZ4w-F8PtLdk',
                '4' => 'https://drive.google.com/drive/folders/1dXlCvIhqeej-Xnkc_xFpvqlSH0tEKRVP',

            ],
            'sap_basis' => [
                'fresher' => 'https://drive.google.com/drive/folders/1oobwflyA9K7IJSxApCmBz9g-OGKReefZ',
                '1' => 'https://drive.google.com/drive/folders/1tf4YWrw2RWTU0E7zK9SvYndwSrb4-IYs',
                '2' => 'https://drive.google.com/drive/folders/1ieGudXA4pkIqJZst_Eeem8xJ96JZdLY2',
                '3' => 'https://drive.google.com/drive/folders/14_h6oT3vdclKgLqMq5BZ7H50R6ymu7kk',
                '4' => 'https://drive.google.com/drive/folders/1w4Mq5M_rQ7yjZp2C9C2uiLmE3xEoxvR_',
                '5' => 'https://drive.google.com/drive/folders/1rB53YYIykINGwe9C1rVyfKRhonGxSy7G',
                '6' => 'https://drive.google.com/drive/folders/12W4zZklZCoD_53Ppd_fhk4DaOrX5EJEz',

            ],
            'sap_UI5FIORI' => [
                'fresher' => 'https://drive.google.com/drive/folders/1OqXQCnNooHjO0WB9-excK3cz6vd7mAAb',
                '1' => 'https://drive.google.com/drive/folders/1x15zSlP39_yCs0-I_QOJ_o9mLkEZcSxa',
                '2' => 'https://drive.google.com/drive/folders/1Y7HH2XzqKpH9uYoKQHfN2pOPitJKMj2j',
                '3' => 'https://drive.google.com/drive/folders/1VdBnY23IZkebCh8mxlpNWQwOKmPv_rrR',
                '4' => 'https://drive.google.com/drive/folders/1CYaXv5AMCPHL8Law1xNlz5ohIMmZWjTA',
                '5' => 'https://drive.google.com/drive/folders/1LJWPZ1YELxaPKtjneDBUCP10wcXsFnM5',
            ],
            'sap_ariba' => [
                'fresher' => 'https://drive.google.com/drive/folders/1h3l1ALqvELVgROOvygrF7tcM5AFNBs6U',
                '1' => 'https://drive.google.com/drive/folders/1sBm0o2-Mcq80NOvz7vaw612RNozC6f9r',
                '2' => 'https://drive.google.com/drive/folders/1Y2F4arDnc7gLeVT76WVEW0lcg1WmgJWI',
                '3' => 'https://drive.google.com/drive/folders/1XSH3Rq4aOtjOCatBoIaFch7TMf1Qj2HS',
                '4' => 'https://drive.google.com/drive/folders/1Y0KOA6AFGRwNOq5YU_2_Y1mOvo2dgMk-',
                '5' => 'https://drive.google.com/drive/folders/1rDSeQ-5rn-DtH4Ql3USnz4GdF3_0KDjY',
            ],
            'sap_sd' => [
                'fresher' => 'https://drive.google.com/drive/folders/1b92kB9AVZ9xlb-zHYmzbvyA2nQo4xS1m',
                '1' => 'https://drive.google.com/drive/folders/1J2gWIF4ac7uiTEYUG1Vwv3ht2QlQgKwZ',
                '2' => 'https://drive.google.com/drive/folders/1S0zgsyJBFrOQ2IkbiXhEwX5Q6Ny90xol',
                '3' => 'https://drive.google.com/drive/folders/17IEdgLZzY3xmMxLt5QcD_T5ASEhv7vxX',
                '4' => 'https://drive.google.com/drive/folders/1WGwICTekdEZ3dRKen6Ni0vzdV7vN8yp1',
                '5' => 'https://drive.google.com/drive/folders/15SC3dBFZDRmnnCQc24CqcxAYy7Uoou-T',
                '6' => 'https://drive.google.com/drive/folders/1kte7F9Li2KWRD73GmYRMfhhOzQREE9KU',
            ],
            'sap_pm' => [
                'fresher' => 'https://drive.google.com/drive/folders/1KCIUu-m_ERikanBuauw53OeuQPkxiJTC',
                '1' => 'https://drive.google.com/drive/folders/184YrkzJWjsnB8uNlc6oV0hiPimFH6HDT',
                '2' => 'https://drive.google.com/drive/folders/1gYod93EBjQ3PTSvb1FA7LH___eQZMOQ4',
                '3' => 'https://drive.google.com/drive/folders/1m_3Hv5-_pIhF0JgkAd0aeWO70Xw3bMIW',
                '4' => 'https://drive.google.com/drive/folders/1ATgAPllN9YjdP_hBNSqF1VjHAqpTg7wK',
                '5' => 'https://drive.google.com/drive/folders/1D5nGz0pz7TXDsUOfHtQk1H8OiXqWeQMD',
                '6' => 'https://drive.google.com/drive/folders/1SYJRZY0FYcyxTEmr955FaFd63IwIlhQj',
            ],
            'sap_tm' => [
                'fresher' => 'https://drive.google.com/drive/folders/1HpEzzFH_Ce169C4naClGma9Q3Xw_cCIk',
                '1' => 'https://drive.google.com/drive/folders/1B_IAIGAcKZ8ZHVyNmz0rAEujGgq726WW',
                '2' => 'https://drive.google.com/drive/folders/1T3Rca5045110ujyJ3Q394MVU1kJuvovW',
                '3' => 'https://drive.google.com/drive/folders/12F-LkZmyiIDJ43Bb02rtk1_TGW4mhyjU',
                '4' => 'https://drive.google.com/drive/folders/1AXWBE8b3pX8MpVnsKKRmSUqdHMH_T2fn',
                '5' => 'https://drive.google.com/drive/folders/1lIrS84mJvIJi_UHt-QMfiVnTve_-D5e9',
                '6' => 'https://drive.google.com/drive/folders/1N71z4a1W0vjgzOAUX9QtDAG_Pzj7Aku5',
            ],
            'sap_pp' => [
                'fresher' => 'https://drive.google.com/drive/folders/16HnO0ujL66FcCull4TKuFJCOPZkfryav',
                '1' => 'https://drive.google.com/drive/folders/12WFSENGWA0W3erGj18ErR_GObIVd9ec6',
                '2' => 'https://drive.google.com/drive/folders/1a20_gQophHWNcbYvSAq1Z8jCwscy3qqE',
                '3' => 'https://drive.google.com/drive/folders/1SBYbZlKgPAaw_9Pf85A38d6oHMWMJhx8',
                '4' => 'https://drive.google.com/drive/folders/1qzlsdWGI7P5JLmoW3mLziWzQVSE1xALY',
                '5' => 'https://drive.google.com/drive/folders/1MkbEHKN3z4P6FlNK2EyQMdBbXQU__Xi1',
                '6' => 'https://drive.google.com/drive/folders/1faWlgqgWOVZiJsPyaMHZpdbLz_spgF3t',
            ],

            'sap_ewm' => [
                'fresher' => 'https://drive.google.com/drive/folders/1ItWCNdv0VHDaoJKPowkDTC_0Cq8BzT4D',
                '1' => 'https://drive.google.com/drive/folders/1_p9VU5rjnoDHA6ITy15CA7AI9Ly-epuL',
                '2' => 'https://drive.google.com/drive/folders/1C7q1py_Plscws9Dg1kIAKFs1SRfRyor-',
                '3' => 'https://drive.google.com/drive/folders/1QXdr-lriLLVq1Xexi_s0V4vu2MnEFAT6',
                '4' => 'https://drive.google.com/drive/folders/1EINz3b6y1Zmf-KEb9BvDyfmx80z_2lkp',
                '5' => 'https://drive.google.com/drive/folders/1wQAvUxD3JevU-nU8T98b4CVqzXbBLhA0',
            ],
            'sap_scm' => [
                'fresher' => 'https://drive.google.com/drive/folders/1rsdbalE1Okq82LojycdQzKwZCs-yLBkT',
                '1' => 'https://drive.google.com/drive/folders/1GlHoU_tbYxeqcugQS7L79BtVaT1ljSsz',
                '2' => 'https://drive.google.com/drive/folders/1cxiGduR4Z8R_OwxOg-Z_Z0rb2dksWCd-',
                '3' => 'https://drive.google.com/drive/folders/1kD4FNJTUkZUs084eU6K0D0bwC82ntZX7',
                '4' => 'https://drive.google.com/drive/folders/1M-wUDAloRVwGXdY9jN2xFOa4fOx9e9hl',
                '5' => 'https://drive.google.com/drive/folders/1qhJmIccyDykKf6XO4ptZ3O8k_34A3S7L',
                '6' => 'https://drive.google.com/drive/folders/14tQWPN5QwD9ZFFjCKkvJ88zz9PHnPtww',
            ],
            'sap_ibp' => [
                'fresher' => 'https://drive.google.com/drive/folders/1TWgDZfugtbLiLXdVum7xE0cNsKT_2mFL',
                '1' => 'https://drive.google.com/drive/folders/1BpgLvUfcMyrFWG6IvDXGGH1NL7DvrVgZ',
                '2' => 'https://drive.google.com/drive/folders/1Rg-xpiY-yvRv94Yy3GjBYxq2B3XwVTsG',
            ],
            'sap_b1' => [
                'fresher' => 'https://drive.google.com/drive/folders/1JiKCiWZd7cfNm1Zx9gu0KMlkWdAyf8S-',
                '1' => 'https://drive.google.com/drive/folders/1I775eCbFjsRJrvHafuMsQ-UU2Mxyq4dO',
                '2' => 'https://drive.google.com/drive/folders/1Ltj3yKxt-DmuGlJ2NuwDCx9lxeWpqxSq',
                '3' => 'https://drive.google.com/drive/folders/1OhT3xGAbWZnLyQ7zFJjEeImZCQLJ7Q15',
                '4' => 'https://drive.google.com/drive/folders/1Ey7RIn2oeUo_LoPcothT7ZKc83a3KoRx',
                '5' => 'https://drive.google.com/drive/folders/1fzSgaI8UnexCEKwTk8sZxjdqezyZhV8g',
                '6' => 'https://drive.google.com/drive/folders/1LpKtMNbOUtn526rTCYJX-IoI-oNNRh_U',
            ],
            'sap_hcm' => [
                'fresher' => 'https://drive.google.com/drive/folders/1G1hA8B-HwGJuQHJ3H3ZMS530orgeMPuF',
                '1' => 'https://drive.google.com/drive/folders/1dT7BF2XN6O2bx4ZrYuqP6xrsTSb0zKDA',
                '2' => 'https://drive.google.com/drive/folders/1YM3DvGP2wrUlojadmfj2hj421pdVg4uj',
                '3' => 'https://drive.google.com/drive/folders/1Kxs2pgtywQ7jm4quVnNzkB2Pb_kDOA2h',
                '4' => 'https://drive.google.com/drive/folders/1f11xAwdTsX5KTaLKLXdA-WD8yvTWxmqk',
                '5' => 'https://drive.google.com/drive/folders/1AvUXxQ9WbtTZmTvTArMTm7LPymHZKGTa',

            ],
            'sap_qm' => [
                'fresher' => 'https://drive.google.com/drive/folders/17W204YfGK7Nzxj6vllMgT68r4onfo_Th',
                '1' => 'https://drive.google.com/drive/folders/1faHUCAtJjDRgwAhOzW2lcidnMATYSTrT',
                '2' => 'https://drive.google.com/drive/folders/1S-k9bKtvgDYa2QrDYWbj4RbfE9G_trs3',
                '3' => 'https://drive.google.com/drive/folders/1YhxfZUbygKxvC3hXzpcZqvJHGDJJyfu8',
                '4' => 'https://drive.google.com/drive/folders/1z-_R5nNTKBrjqMfYJsLiVkydZZtfVAmc',
                '5' => 'https://drive.google.com/drive/folders/1EI2k8izQDRPNF1QWXPsTewiiUSjGxxNe',

            ],
            'sap_factors' => [
                'fresher' => 'https://drive.google.com/drive/folders/1gdMwyBAbOKZYZ__uOkNb7aIQrqlSfY0r',
                '1' => 'https://drive.google.com/drive/folders/1kVOIZ6w8iRsT2HnYsk0Erw2g8zan5-P7',
                '2' => 'https://drive.google.com/drive/folders/1ZyiYhVB6cBOh0p519OIqOeOxcEwiDyLZ',
                '3' => 'https://drive.google.com/drive/folders/1MWFinWtmuca6iG3H_lrL7nv_9TM5qxD6',

            ],
            'sap_cpi' => [
                'fresher' => 'https://drive.google.com/drive/folders/1CwBALcrSdFQftEGRh4Tet3l76-vi0ggJ',
                '1' => 'https://drive.google.com/drive/folders/1FGnhQjyRifCJItWZQphqH9zMPA4CpAxy',
                '2' => 'https://drive.google.com/drive/folders/12-JfjEz_w9VzvSw2BiLbD6WiLExr2V4r',
                '3' => 'https://drive.google.com/drive/folders/11Q1NItMYENGixCEPIEquFaXKj15eLnhd',

            ],
            'sap_btp' => [
                'fresher' => 'https://drive.google.com/drive/folders/1zHtva5Zmf3zL2YHBUXqa_3c6ZNHWxKnI',
                '1' => 'https://drive.google.com/drive/folders/19EfrUsxgYJJNe_izI3ayeqyvxRsfhqb1',
                '2' => 'https://drive.google.com/drive/folders/1BhSlcLakNocXdflYCroxmkZz3qkd1G6w',
                '3' => 'https://drive.google.com/drive/folders/10bwXm3KJG6myYBeNBFmX90PnjV3P0zNT',
            ],
            'sap_trm' => [
                'fresher' => 'https://drive.google.com/drive/folders/1rfcZJcuieoIQoZsgvchK9C2dDhaoBx-2',
                '1' => 'https://drive.google.com/drive/folders/1Cdbhyo510-0yOMTLtFmqL8ug5yasv3eB',
                '2' => 'https://drive.google.com/drive/folders/1dPkoSpP0fX1IUgVtCovsZCN-yFi4gfLX',
                '3' => 'https://drive.google.com/drive/folders/1CqEWBhSltR4gSxST2QIQtKvzk-_gTJHs',
            ],
            'sap_hana' => [
                'fresher' => 'https://drive.google.com/drive/folders/1jbuC4wQv8pRJpBQE2Q-99IK_iBsW6lN5',
                '1' => 'https://drive.google.com/drive/folders/1IoTE69F1hywkO9rL7qvbgr6QE9Pk2M1H',
                '2' => 'https://drive.google.com/drive/folders/1_ci3t4dzbifuY5tRRX25Gxzpg86gJy0r',
                '3' => 'https://drive.google.com/drive/folders/1Xg31lglkfzirTvZyNVuCTc91U-LwLR7k',
            ],
            'sap_sac' => [
                'fresher' => 'https://drive.google.com/drive/folders/1mVzv34ycdmZ9pRnOsYjLccXxAQDiWqqr',
                '1' => 'https://drive.google.com/drive/folders/1D4d-A9UOz1f6MS9918DASOi0Mb37N0hl',
                '2' => 'https://drive.google.com/drive/folders/1GyRCDNl1MJKmYBv1RMJXWHws2vhSpjoW',

            ],
            'sap_mdm' => [
                'fresher' => 'https://drive.google.com/drive/folders/12vPvWSx5JTo2fZzOMQM6vkXrSZ84Lqim',
                '1' => 'https://drive.google.com/drive/folders/1IsC2-ZcPwtZmzLqX8dv7KyHzoyiBYhQZ',
                '2' => 'https://drive.google.com/drive/folders/1jH6iQU3xyTEpRvKgfT64JvFn-rS_CftU',
                '3' => 'https://drive.google.com/drive/folders/1dXwlZc2JQvxVahir96JlBo1CIJDzYuea',
            ],
            'sap_bods' => [
                'fresher' => 'https://drive.google.com/drive/folders/1sG89u19r-U9cGuroAC-L7lIhy_1LHlXT',
                '1' => 'https://drive.google.com/drive/folders/1H_SaWgZTghelbORBh6I3hAorxsqhkEvB',
                '2' => 'https://drive.google.com/drive/folders/1koqwer1S_xgERin798nEtnZCo3Ka80xK',
                '3' => 'https://drive.google.com/drive/folders/15a97nFRvPqXRXHKO9jJyLH6RaIc_nVLJ',
            ],
            'sap_gts' => [
                'fresher' => 'https://drive.google.com/drive/folders/1cQdwaRiEF-tel9fVy8OoaD8IE2umK1XJ',
                '1' => 'https://drive.google.com/drive/folders/1amUxpsdTP76G5UpkmUCusfVu_CCHByVp',
                '2' => 'https://drive.google.com/drive/folders/17DzHftHufMxctCANAOtLvQVuyLBR6QoR',
                '3' => 'https://drive.google.com/drive/folders/1T1euXXYvJ2xfRV8dOVhy0PDyX_G30EOV',
                '4' => 'https://drive.google.com/drive/folders/1IY3SyPY96HwBfztYUIFGKGIbO1mDYAO-',
            ],
            'sap_grc' => [
                'fresher' => 'https://drive.google.com/drive/folders/1nn4pL_AjETz9odst2vJPDuaFvBD6BmnV',
                '1' => 'https://drive.google.com/drive/folders/13aCLrZREztYpoq1gV1xBwZ0PN-yJsANf',
                '2' => 'https://drive.google.com/drive/folders/1fgzVRuVFeYIkvxsOWjROOXDfqgqWSBYN',
                '3' => 'https://drive.google.com/drive/folders/1N9rvW7CXecFRnElo9rDUCEr1QEKLDLSJ',
            ],
            'sap_cs' => [
                'fresher' => 'https://drive.google.com/drive/folders/1a0FKdeLiUylTOqcjggna942i96IxW3oa',
                '1' => 'https://drive.google.com/drive/folders/1X5R2qAsejVxuFquI5rAcWSeLAUpklsB9',
                '2' => 'https://drive.google.com/drive/folders/1IWnfbo-CW4y48toIkuDNQxosShs8Kg-h',
                '3' => 'https://drive.google.com/drive/folders/1ESIQIlsURJBJBU_4J4i6kCbW-wtNPfaB',
            ],
            'sap_co' => [
                'fresher' => 'https://drive.google.com/drive/folders/1Ub4q05MqvqR5UH64Mar9e-7FMDqdHuis',
                '1' => 'https://drive.google.com/drive/folders/16ZDIVHp6Vtiw_sRmFVlo-yacedmIzgDN',
                '2' => 'https://drive.google.com/drive/folders/1oEbMw6op2lAc2VueUMExTU6fSbTUxN_W',
                '3' => 'https://drive.google.com/drive/folders/14nc1ihChT6yZWR-tJ7LgK_PlolWgdDkt',
            ],
            'sap_brim' => [
                'fresher' => 'https://drive.google.com/drive/folders/16cJh6wV4i01sRFRwgSjvZ5kVCcV-wn-p',
                '1' => 'https://drive.google.com/drive/folders/1qk8cDtUFErUW_tFg6LoVbr7lO_p_kREI',
                '2' => 'https://drive.google.com/drive/folders/1vuH0nieptRdnfo4Q3Ti7BQXktJb3LCnL',
                '3' => 'https://drive.google.com/drive/folders/10726iAENjvoNkJC_xt3m2zjTpSa394fv',
            ],
            'sap_ps' => [
                'fresher' => 'https://drive.google.com/drive/folders/13jrXx9jxNO3Im4hczpV60h3FeDdWuWt6',
                '1' => 'https://drive.google.com/drive/folders/1svmlnltugzXHqh54fDOA4qkk7-ZzQwS1',
                '2' => 'https://drive.google.com/drive/folders/1X62w_s3afanhXNQdKQ101QRF0ffgDtdT',
                '3' => 'https://drive.google.com/drive/folders/1w8TWY-LkcIfmWd-0hyh08V25gF2csGSF',
            ],
        ];

        if (isset($resumeLinks[$request->courses][$request->experience])) {
            $downloadLink = $resumeLinks[$request->courses][$request->experience];

            // Check if the email is in the allowed list
            if (!in_array($request->email, $allowedEmails)) {
                // For non-allowed emails, check if resume was already downloaded
                $existingSubmission = ResumeSubmission::where('email', $request->email)->first();

                if ($existingSubmission) {
                    return response()->json([
                        'success' => false,
                        'errorMessage' => 'You have already downloaded a resume using this email.',
                    ]);
                }

                // Record the submission for non-allowed emails
                ResumeSubmission::create([
                    'email' => $request->email,
                    'course' => $request->courses,
                    'experience' => $request->experience,
                ]);
            }

            // Return the download link for allowed and non-allowed emails
            return response()->json([
                'success' => true,
                'downloadLink' => $downloadLink,
            ]);
        }

        // If the course and experience combination does not exist
        return response()->json([
            'success' => false,
            'errorMessage' => 'Invalid course or experience combination.',
        ]);
    }


    public function About()
    {
        return view('aboutus');
    }

    public function Contact()
    {
        return view('Contact');
    }
    public function fetch(Request $request)
    {
        $page = $request->query('page', 1);
        $response = Http::get('https://srijaninstitute.com/api/jobs', [
            'page' => $page
        ]);

        return response()->json($response->json());
    }
    public function ficotrainingficotraining(Request $request)
    {
        return view('course.ficocourse');
    }


    public function sap()
    {
        return view('course.sap');
    }

    public function sapcourseself()
    {
        return view('course.sapcourseself');
    }

    public function  ppmodule()
    {
        return view('course.ppmodule');
    }

    public function  sapsdcourse()
    {

        return view('course.sapsdcourse');
    }
    public function  sapficodinesh()
    {
        return view('course.sapficodinesh');
    }
    public function  sappmcourse()
    {
        return view('course.sappmcourse');
    }
    public function  comingsoon()
    {
        return view('comingsoon');
    }
    public function  privacypolicy()
    {
        return view('privacypolicy');
    }
    public function  termsandconditions()
    {
        return view('termsandconditions');
    }
    public function  cancellationrefundpolicy()
    {
        return view('cancellationrefundpolicy');
    }
    public function  pricingdetails()
    {
        return view('pricingdetails');
    }
}

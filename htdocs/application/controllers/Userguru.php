<?php
defined("\x42\x41\x53\x45\120\101\124\x48") or exit("\x4e\157\40\x64\x69\162\145\143\164\x20\x73\143\162\x69\x70\x74\40\x61\x63\143\145\163\x73\40\x61\154\x6c\157\167\x65\144"); class Userguru extends CI_Controller { public function __construct() { goto xEbSV; iguDl: show_error("\110\141\156\171\141\40\101\144\x6d\x69\x6e\151\163\164\x72\x61\164\157\x72\40\x79\141\x6e\147\40\x64\151\x62\x65\162\x69\x20\150\141\153\40\165\156\164\x75\153\x20\155\x65\x6e\147\141\x6b\x73\145\x73\40\x68\141\154\141\x6d\141\156\40\x69\x6e\151\x2c\40\x3c\141\x20\x68\x72\x65\x66\x3d\x22" . base_url("\144\x61\163\x68\x62\x6f\141\x72\144") . "\42\x3e\113\x65\155\x62\141\x6c\x69\40\x6b\145\x20\x6d\145\x6e\x75\x20\x61\x77\x61\x6c\x3c\x2f\x61\76", 403, "\101\x6b\163\x65\x73\40\124\x65\x72\x6c\141\162\x61\156\x67"); goto iNfro; iNfro: xSm2T: goto Dp7ee; xEbSV: parent::__construct(); goto UhOLC; lqMCV: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\162\x75"))) { goto xSm2T; } goto iguDl; JDmVU: $this->load->model("\x44\x61\163\150\x62\157\141\x72\144\137\155\x6f\144\145\x6c", "\144\x61\x73\x68\142\157\141\162\144"); goto qkPBP; X76T2: redirect("\x61\165\x74\x68"); goto Ac7M3; fN_sU: $this->load->library(["\x64\141\x74\x61\164\x61\142\154\145\163", "\x66\x6f\x72\x6d\x5f\166\141\x6c\151\x64\x61\164\151\157\x6e"]); goto Zl04F; Zl04F: $this->load->model("\125\163\x65\x72\x73\137\x6d\x6f\144\145\154", "\x75\x73\x65\x72\x73"); goto H8tKh; Dp7ee: goto yk9wC; goto UejPj; UhOLC: if (!$this->ion_auth->logged_in()) { goto F0xpT; } goto lqMCV; H8tKh: $this->load->model("\115\x61\x73\164\x65\162\x5f\x6d\x6f\x64\x65\154", "\155\141\x73\164\x65\162"); goto JDmVU; UejPj: F0xpT: goto X76T2; qkPBP: $this->form_validation->set_error_delimiters('', ''); goto JKU1U; Ac7M3: yk9wC: goto fN_sU; JKU1U: } public function output_json($data, $encode = true) { goto rw17z; plncm: $this->output->set_content_type("\141\160\160\x6c\x69\143\141\x74\151\x6f\x6e\x2f\x6a\x73\x6f\156")->set_output($data); goto p6s31; rw17z: if (!$encode) { goto ZAYwS; } goto h4sc2; VDqKb: ZAYwS: goto plncm; h4sc2: $data = json_encode($data); goto VDqKb; p6s31: } public function data() { goto pKi02; uWZuL: $this->output_json($this->users->getUserGuru($tp->id_tp, $smt->id_smt), false); goto d7EWE; PY_NW: $smt = $this->dashboard->getSemesterActive(); goto uWZuL; pKi02: $tp = $this->dashboard->getTahunActive(); goto PY_NW; d7EWE: } public function index() { goto djXsB; uUU9a: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\x74\145\163\x2f\x64\141\163\x68\x62\x6f\141\x72\x64\x2f\137\146\x6f\157\164\x65\x72"); goto PCWD5; oSziB: $data["\164\x70\137\141\x63\164\151\x76\145"] = $this->dashboard->getTahunActive(); goto aqBhJ; aqBhJ: $data["\163\155\164"] = $this->dashboard->getSemester(); goto SnjSS; P6kqx: $id = $this->users->getGuruByUsername($user->username); goto Ha1LS; u0ivT: $group = $this->ion_auth->get_users_groups($user->id)->row()->name; goto Vf1i5; djXsB: $user = $this->ion_auth->user()->row(); goto u0ivT; PCWD5: R3s2b: goto JV7kZ; eqi1I: goto R3s2b; goto Tvie0; Tvie0: XKud4: goto GSDRF; Ha1LS: $this->edit($id->id_guru); goto eqi1I; rDVWB: $this->load->view("\165\x73\x65\162\x73\57\x67\165\x72\165\x2f\x64\141\164\141"); goto uUU9a; SnjSS: $data["\163\x6d\x74\137\141\x63\x74\x69\x76\x65"] = $this->dashboard->getSemesterActive(); goto ju51A; rcHSL: if ($group === "\141\144\x6d\151\x6e") { goto XKud4; } goto P6kqx; GSDRF: $data["\x74\160"] = $this->dashboard->getTahun(); goto oSziB; ju51A: $this->load->view("\137\164\145\x6d\x70\x6c\x61\x74\145\163\57\144\x61\163\x68\142\157\x61\x72\x64\x2f\x5f\x68\x65\141\x64\145\x72", $data); goto rDVWB; Vf1i5: $data = ["\165\x73\145\x72" => $user, "\152\165\x64\165\154" => "\125\x73\x65\x72\40\115\x61\x6e\x61\x67\x65\155\145\156\164", "\x73\x75\x62\152\x75\144\165\154" => "\104\141\164\x61\40\x55\x73\x65\x72\x20\107\165\162\x75", "\160\x72\x6f\146\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\x74\x69\156\x67" => $this->dashboard->getSetting()]; goto rcHSL; JV7kZ: } public function activate($id) { goto c85Tu; rfF2T: $group = array("\62"); goto YNnjh; YNnjh: if ($this->ion_auth->username_check($username)) { goto uUWmS; } goto EWli3; c85Tu: $guru = $this->users->getDataGuru($id); goto SpFm9; iAN4Z: uUWmS: goto Xweyg; xRHYf: goto NTsAO; goto ImSa0; RiNN3: $id_user = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto wCb6I; SOZuK: $password = trim($guru->password ?? ''); goto KMzwc; c5wgw: $data["\x70\x61\x73\x73"] = $password; goto T7mVB; HPdql: NTsAO: goto BL13p; eHu3F: $data = ["\163\x74\141\164\x75\163" => false, "\x6d\163\147" => "\125\x73\145\x72\x6e\x61\x6d\x65\40" . $email . "\x20\x74\x69\144\141\153\x20\x74\x65\x72\163\x65\x64\x69\141\x20\x28\x73\165\144\x61\150\x20\144\151\147\x75\156\141\x6b\141\156\51\56"]; goto HPdql; AHCaa: $last_name = count($nama) > 2 ? $nama[1] : end($nama); goto SOT3D; E4WcI: $first_name = $nama[0]; goto AHCaa; KMzwc: $email = strtolower($guru->username ?? '') . "\x40\x67\165\x72\165\56\x63\x6f\x6d"; goto B7g2k; BL13p: goto NYPH6; goto iAN4Z; op7ve: $this->db->set("\x69\x64\137\x75\x73\x65\162", $id_user); goto EJ9Sn; Xweyg: $data = ["\163\x74\141\164\x75\163" => false, "\155\x73\147" => "\x55\x73\145\162\x6e\x61\155\x65\40" . $username . "\x20\x74\151\x64\141\x6b\40\164\145\162\163\x65\144\x69\x61\x20\50\163\165\144\141\150\x20\144\151\x67\x75\156\141\153\141\x6e\51\56"]; goto mBzUl; wCb6I: $data = ["\x73\x74\141\x74\x75\163" => true, "\x6d\163\x67" => "\101\x6b\x75\x6e\40" . $guru->nama_guru . "\x20\144\x69\141\153\164\151\x66\153\141\x6e\56"]; goto op7ve; SOT3D: $username = trim($guru->username ?? ''); goto SOZuK; T7mVB: $this->output_json($data); goto x0fnv; N0I7b: $this->db->update("\155\x61\163\164\x65\162\x5f\x67\x75\x72\x75"); goto xRHYf; EJ9Sn: $this->db->where("\x69\144\137\x67\165\x72\165", $id); goto N0I7b; EWli3: if ($this->ion_auth->email_check($email)) { goto HVdI1; } goto RiNN3; ImSa0: HVdI1: goto eHu3F; mBzUl: NYPH6: goto c5wgw; SpFm9: $nama = explode("\x20", $guru->nama_guru ?? ''); goto E4WcI; B7g2k: $additional_data = ["\x66\151\x72\163\x74\x5f\156\141\x6d\145" => $first_name, "\154\141\163\x74\x5f\156\141\x6d\145" => $last_name]; goto rfF2T; x0fnv: } public function deactivate($id = NULL) { goto gw2wl; GCak_: $data = ["\x73\164\141\x74\x75\163" => $deleted, "\x6d\163\147" => "\164\x65\154\x61\x68\40\144\x69\156\157\x6e\x61\x6b\164\x69\146\x6b\x61\x6e\x2e"]; goto ZvfcX; MLIYc: $id = (int) $id; goto IfSxo; tTJL6: $data = ["\163\x74\x61\164\165\163" => false, "\x6d\163\x67" => "\x59\157\165\x20\155\165\x73\x74\40\x62\145\x20\141\x6e\40\x61\x64\x6d\x69\156\x69\163\164\x72\x61\164\157\162\40\x74\157\x20\166\151\x65\167\40\164\150\x69\x73\40\160\x61\x67\x65\x2e"]; goto fvP6h; IfSxo: if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) { goto sjjhU; } goto CZPfY; CbhAZ: goto uOxxM; goto dotHo; Rawgo: $deleted = $this->ion_auth->delete_user($id); goto GCak_; dotHo: sjjhU: goto Rawgo; cuep2: QglTj: goto tTJL6; ZvfcX: uOxxM: goto TMhQw; fvP6h: qwKAB: goto w5xbm; gw2wl: if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) { goto QglTj; } goto MLIYc; CZPfY: $data = ["\x73\164\141\164\x75\x73" => false, "\155\x73\x67" => "\x41\156\144\141\x20\x62\x75\x6b\x61\156\40\x61\144\x6d\151\156\56"]; goto CbhAZ; w5xbm: $this->output_json($data); goto umKc2; TMhQw: goto qwKAB; goto cuep2; umKc2: } public function aktifkanSemua() { goto VGN45; Gvki2: foreach ($guruAktif as $guru) { goto SC7jR; paoq0: goto iJIJE; goto cVpb2; JMc6v: $this->activate($guru->id_guru); goto paoq0; JHxf6: $jum += 1; goto FStH0; cVpb2: S1r9c: goto njfKn; SC7jR: if ($guru->aktif > 0) { goto S1r9c; } goto JMc6v; gEXW7: iJIJE: goto JHxf6; njfKn: goto Tr17h; goto gEXW7; FStH0: Tr17h: goto PvY_x; PvY_x: } goto rbWfQ; bRRyt: $jum = 0; goto Gvki2; B04Gz: $data = ["\163\164\141\164\x75\x73" => true, "\152\x75\x6d\x6c\141\x68" => $jum, "\155\x73\147" => $jum . "\x20\x47\165\x72\x75\x20\144\x69\x61\x6b\164\x69\146\x6b\x61\156\x2e"]; goto memec; rbWfQ: TgWw5: goto B04Gz; memec: $this->output_json($data); goto NlQd7; VGN45: $guruAktif = $this->users->getGuruAktif(); goto bRRyt; NlQd7: } public function nonaktifkanSemua() { goto yX0k2; BkilN: foreach ($guruAktif as $guru) { goto vxhQ8; ghin_: goto MqG6u; goto ibmi2; jIDV1: $del = $this->deactivate($guru->id, ''); goto H82Kg; H82Kg: $this->output_json($del); goto t1YeN; t1YeN: MqG6u: goto uaYg_; loSPF: qEprt: goto iKyvj; vxhQ8: if ($guru->aktif > 0) { goto hUkx8; } goto qGpMu; uaYg_: $jum += 1; goto loSPF; ibmi2: hUkx8: goto jIDV1; qGpMu: goto qEprt; goto ghin_; iKyvj: } goto p5B8C; TrC2E: $jum = 0; goto BkilN; yX0k2: $guruAktif = $this->users->getGuruAktif(); goto TrC2E; AZR6i: $this->output_json($data); goto K5Lwv; p5B8C: oVCkn: goto S3hBH; S3hBH: $data = ["\163\x74\141\164\x75\x73" => true, "\x6a\x75\155\154\141\150" => $jum, "\155\163\x67" => $jum . "\x20\x47\165\x72\x75\x20\144\151\x6e\157\x6e\141\x6b\164\151\x66\x6b\141\x6e\x2e"]; goto AZR6i; K5Lwv: } public function edit($id) { goto m4drO; f2KJ5: $data["\163\155\164\137\141\x63\164\x69\x76\145"] = $smt; goto uZWuT; wdzbX: $this->load->view("\x5f\164\145\x6d\160\154\141\164\145\163\57\x64\141\163\x68\x62\157\x61\162\144\x2f\137\150\145\141\x64\145\x72", $data); goto Kxig0; hqz55: $data["\154\145\x76\145\x6c\x73"] = $this->users->getLevelGuru(); goto wdzbX; qW_Im: goto FVF6w; goto BZHdO; BZHdO: yngqY: goto HWvfo; hl0gz: $users = $this->users->getUsers($guru->username); goto mV0Cf; ODY8k: $this->load->view("\x6d\145\x6d\x62\145\x72\163\57\x67\x75\162\165\57\x74\145\x6d\160\x6c\x61\164\145\163\57\150\x65\x61\144\x65\x72", $data); goto GLzo7; M0k0T: $data["\147\x75\x72\165"] = $guru; goto SAhH6; bAO3y: $data["\147\x72\x6f\x75\x70\163"] = $this->ion_auth->groups()->result(); goto r9XAX; r9XAX: $data["\x6b\145\154\x61\x73\x73"] = $this->users->getKelas($tp->id_tp, $smt->id_smt); goto mHAzC; Kxig0: $this->load->view("\x75\x73\x65\x72\x73\x2f\147\x75\x72\165\57\145\144\151\x74"); goto lMB9e; ib2zN: $this->load->view("\155\x65\155\x62\145\162\x73\x2f\147\165\x72\165\57\164\145\x6d\160\x6c\x61\x74\145\163\x2f\x66\x6f\x6f\164\x65\x72"); goto qW_Im; IhvTu: $data["\x74\x70\x5f\x61\x63\x74\x69\x76\145"] = $tp; goto mPIKX; SAhH6: $data["\x74\x70"] = $this->dashboard->getTahun(); goto IhvTu; kQslX: $data["\x75\163\145\162\163"] = $users; goto M0k0T; APmxg: $smt = $this->dashboard->getSemesterActive(); goto jLAdU; PJ3Dk: if ($group === "\141\x64\155\151\156") { goto yngqY; } goto ODY8k; mV0Cf: $user = $this->ion_auth->user()->row(); goto cvAVB; mPIKX: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto f2KJ5; cvAVB: $data = ["\x75\163\145\162" => $user, "\x6a\165\144\165\x6c" => "\125\163\x65\x72\40\115\x61\x6e\x61\147\x65\155\145\156\164", "\x73\165\142\152\165\144\x75\154" => "\105\144\151\164\x20\104\141\x74\141\40\x55\x73\145\x72", "\x73\x65\164\164\151\x6e\147" => $this->dashboard->getSetting()]; goto kQslX; tnBgL: FVF6w: goto zCpop; jLAdU: $guru = $this->users->getDetailGuru($id); goto hl0gz; mHAzC: $data["\155\141\x70\x65\x6c\163"] = $this->users->getMapel(); goto hqz55; m4drO: $tp = $this->dashboard->getTahunActive(); goto APmxg; GLzo7: $this->load->view("\x75\x73\x65\x72\163\x2f\147\x75\x72\165\57\145\144\151\164"); goto ib2zN; uZWuT: $group = $this->ion_auth->get_users_groups($user->id)->row()->name; goto PJ3Dk; HWvfo: $data["\160\162\x6f\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto bAO3y; lMB9e: $this->load->view("\x5f\164\145\x6d\160\154\141\164\x65\x73\57\144\x61\163\x68\x62\x6f\141\x72\144\x2f\137\x66\157\x6f\164\x65\x72"); goto tnBgL; zCpop: } public function editLogin() { goto L1hFp; lhCoN: $guru = $this->db->get_where("\x6d\141\x73\x74\x65\162\137\147\165\162\x75", "\151\144\x5f\147\165\x72\x75\75\42" . $id_guru . "\42")->row(); goto UwBsT; asn_p: $pass = $this->input->post("\156\145\167", true); goto P1C08; xq0Sv: $this->db->set("\x69\x64\x5f\165\x73\x65\x72", $id_user); goto UxXfb; AdKAo: $last_name = end($nama); goto ZuM7l; h8qXW: $deleted = $this->ion_auth->delete_user((int) $user_guru->id); goto l1xW4; JhDzx: goto Vzn1E; goto APoRC; T6ChP: $group = array("\x32"); goto hhOhw; UwBsT: $nama = explode("\x20", $guru->nama_guru ?? ''); goto xIzpv; ZuM7l: $username = trim($username ?? ''); goto JSRi1; WGJNp: eMWNw: goto KaiP8; Jg6Ps: $data["\x73\x74\x61\x74\165\163"] = $status; goto U1O0k; Q02Ff: $id_user = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto at1kX; dGxS9: $deleted = true; goto QKkgw; at1kX: $this->db->set("\165\x73\x65\x72\x6e\141\155\145", $username); goto Ws9_X; Ws9_X: $this->db->set("\160\x61\x73\163\x77\157\x72\144", $password); goto xq0Sv; JSRi1: $password = trim($pass ?? ''); goto fP_uv; lYWQK: if ($this->form_validation->run() === FALSE) { goto eMWNw; } goto lhCoN; LQnX0: $this->form_validation->set_rules("\x6f\x6c\x64", $this->lang->line("\143\x68\141\156\x67\x65\x5f\160\x61\163\163\167\x6f\x72\x64\x5f\166\x61\x6c\151\x64\x61\164\x69\157\156\137\157\x6c\144\137\x70\141\x73\163\x77\x6f\x72\x64\137\154\141\x62\145\x6c"), "\162\x65\x71\x75\x69\x72\145\144"); goto qkdQf; Fkeju: if ($deleted) { goto I3P02; } goto hfk6Y; UxXfb: $this->db->where("\151\x64\137\147\165\162\x75", $id_guru); goto cjrPK; W67GR: $username = $this->input->post("\165\x73\x65\x72\x6e\141\155\x65", true); goto asn_p; xZbl0: $msg = $status ? "\x55\x70\x64\141\x74\145\40\142\145\162\x68\x61\x73\151\154" : "\107\x61\x67\141\154\40\x6d\x65\x6e\x67\147\x61\x6e\164\151\x20\165\163\145\162\x6e\x61\x6d\145\x2f\160\141\x73\x73\163\x77\157\x72\x64"; goto T6hlK; WFNtc: goto Ub6IX; goto LY1kZ; fP_uv: $email = strtolower($username) . "\x40\x67\165\162\x75\56\x63\x6f\x6d"; goto dx51a; PT3zS: Ub6IX: goto gnlYN; hhOhw: $user_guru = $this->db->get_where("\x75\x73\145\x72\x73", "\x65\x6d\x61\151\x6c\75\42" . $email . "\x22")->row(); goto dGxS9; e2rqZ: $msg = "\x47\141\147\141\154\x20\x6d\x65\156\x67\x67\x61\156\164\x69\x20\x75\163\145\162\x6e\x61\155\x65\x2f\160\141\x73\163\163\167\157\162\144"; goto JhDzx; dx51a: $additional_data = ["\x66\151\x72\163\164\x5f\156\141\x6d\145" => $first_name, "\x6c\x61\x73\164\x5f\156\x61\x6d\x65" => $last_name]; goto T6ChP; hfk6Y: $status = false; goto e2rqZ; T6hlK: Vzn1E: goto Jg6Ps; LY1kZ: TyQn_: goto mgx01; mgx01: $data = ["\163\x74\x61\x74\x75\163" => false, "\x65\x72\x72\x6f\162\x73" => ["\165\163\x65\162\156\141\155\x65" => "\x55\x73\145\x72\156\x61\x6d\145\x20\163\165\144\x61\150\x20\144\151\147\x75\156\141\153\141\156"]]; goto EwRsO; bLlpy: $this->form_validation->set_rules("\156\x65\167\x5f\x63\x6f\156\x66\x69\162\x6d", $this->lang->line("\143\x68\141\156\x67\x65\137\x70\x61\163\x73\167\157\x72\144\x5f\166\x61\154\151\x64\141\164\x69\157\156\x5f\x6e\x65\x77\137\160\x61\163\163\x77\x6f\x72\144\137\143\x6f\156\146\x69\162\155\x5f\154\141\x62\145\x6c"), "\x72\x65\161\165\x69\162\x65\144"); goto rhpyR; gnlYN: $this->output_json($data); goto znphd; rhpyR: if ($guru_lain && $guru_lain->id_guru != $id_guru) { goto TyQn_; } goto lYWQK; L1hFp: $id_guru = $this->input->post("\x69\144\137\147\x75\162\x75", true); goto W67GR; EwRsO: goto Ub6IX; goto WGJNp; qkdQf: $this->form_validation->set_rules("\156\x65\x77", $this->lang->line("\143\x68\141\x6e\x67\145\137\x70\141\x73\x73\x77\157\162\144\137\x76\141\x6c\x69\144\x61\x74\x69\157\156\137\x6e\x65\167\x5f\x70\141\x73\163\x77\x6f\162\144\137\154\141\x62\x65\154"), "\162\145\161\165\151\x72\145\x64\x7c\x6d\x69\x6e\137\x6c\x65\x6e\147\x74\150\x5b" . $this->config->item("\x6d\x69\x6e\x5f\x70\x61\163\x73\x77\157\x72\x64\137\154\x65\x6e\147\x74\x68", "\x69\157\156\x5f\141\165\x74\x68") . "\135\x7c\x6d\x61\164\x63\150\145\x73\133\156\x65\x77\x5f\143\157\x6e\x66\x69\162\155\135"); goto bLlpy; xIzpv: $first_name = $nama[0]; goto AdKAo; KaiP8: $data = ["\163\164\x61\164\x75\163" => false, "\x65\x72\x72\x6f\x72\x73" => ["\x6f\154\x64" => form_error("\157\154\144"), "\156\145\167" => form_error("\156\145\167"), "\x6e\145\167\x5f\143\157\156\146\151\162\x6d" => form_error("\156\x65\167\x5f\143\157\x6e\146\x69\162\x6d")]]; goto PT3zS; APoRC: I3P02: goto Q02Ff; l1xW4: tv6sP: goto Fkeju; P1C08: $guru_lain = $this->master->getUserIdGuruByUsername($username); goto LQnX0; U1O0k: $data["\x74\x65\170\x74"] = $msg; goto WFNtc; cjrPK: $status = $this->db->update("\x6d\141\163\x74\x65\162\x5f\147\x75\162\x75"); goto xZbl0; QKkgw: if (!($user_guru != null)) { goto tv6sP; } goto h8qXW; znphd: } function buangspasi($teks) { goto Xrtbu; gqgOP: UD5wr: goto Gxe39; d6oQ6: $remove[] = "\x20"; goto qmBlG; GT_Jv: $hasil = $teks; goto DLI33; hoHgG: if (!strpos($teks, "\x20")) { goto UD5wr; } goto MPj1G; DLI33: cPAo3: goto hoHgG; MPj1G: $remove[] = "\47"; goto xS1wW; KBB1Q: goto cPAo3; goto gqgOP; qmBlG: $hasil = str_replace($remove, '', $teks ?? ''); goto KBB1Q; Xrtbu: $teks = trim($teks ?? ''); goto GT_Jv; xS1wW: $remove[] = "\x2e"; goto d6oQ6; Gxe39: return $hasil; goto B1i8o; B1i8o: } private function registerGuru($username, $password, $email, $additional_data, $group) { goto ZYMXX; Gy_J_: $data["\163\164\x61\164\165\163"] = true; goto IHnho; s20Az: m7ytc: goto GGm2G; fMnm5: $data["\x73\x74\141\164\165\x73"] = false; goto s20Az; ZYMXX: $reg = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto Gy_J_; IHnho: $data["\x69\144"] = $reg; goto zli1n; GGm2G: return $data; goto tMqCL; zli1n: if (!($reg == false)) { goto m7ytc; } goto fMnm5; tMqCL: } public function reset_login() { goto tFOY4; zcwhg: if ($this->db->delete("\x6c\157\147\151\156\x5f\141\164\x74\x65\x6d\x70\x74\163")) { goto hftmE; } goto Bh4l0; ck3Bj: goto ZaZdl; goto pWAo0; Bh4l0: $data = ["\x73\x74\141\164\x75\163" => false, "\155\x73\x67" => "\40\147\141\147\141\154\40\144\151\162\145\163\x65\x74"]; goto iR6M7; GB9KJ: $data = ["\x73\x74\141\x74\x75\163" => false, "\155\x73\147" => "\131\157\165\x20\155\165\x73\164\x20\142\x65\40\141\156\40\x61\x64\155\151\156\151\163\164\162\141\x74\157\162\40\164\x6f\x20\166\x69\x65\x77\x20\x74\150\x69\x73\x20\x70\141\x67\x65\56"]; goto cgUfb; zqIwx: $this->db->where("\154\157\147\x69\x6e", $username); goto zcwhg; iR6M7: goto JV2VT; goto ioLVv; vJ4XB: JV2VT: goto ck3Bj; GX1fP: $this->output_json($data, true); goto Mx2vx; nKcDe: if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) { goto RTxd7; } goto zqIwx; pWAo0: RTxd7: goto GB9KJ; Lqia1: $data = ["\x73\164\141\164\x75\163" => true, "\x6d\x73\x67" => "\40\x62\145\162\x68\141\x73\151\154\x20\x64\x69\x72\145\x73\x65\164"]; goto vJ4XB; tFOY4: $username = $this->input->get("\165\x73\145\x72\x6e\141\155\145", true); goto nKcDe; ioLVv: hftmE: goto Lqia1; cgUfb: ZaZdl: goto GX1fP; Mx2vx: } }
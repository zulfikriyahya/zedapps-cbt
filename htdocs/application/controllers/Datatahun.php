<?php
defined("\102\x41\123\x45\120\x41\x54\x48") or exit("\x4e\x6f\x20\x64\x69\162\x65\143\x74\40\x73\x63\x72\x69\160\x74\40\141\143\143\x65\x73\163\40\x61\154\154\157\x77\x65\144"); class Datatahun extends CI_Controller { public function __construct() { goto tIWIG; LVwbn: $this->load->library(["\x64\x61\164\x61\x74\141\142\154\145\163", "\x66\157\x72\x6d\137\x76\x61\x6c\x69\x64\x61\164\151\x6f\156"]); goto rBfb3; MCJbZ: $this->form_validation->set_error_delimiters('', ''); goto y7og0; tIWIG: parent::__construct(); goto Epz6x; ktlFy: if ($this->ion_auth->is_admin()) { goto SYGSp; } goto qh5og; Epz6x: if (!$this->ion_auth->logged_in()) { goto OOZV3; } goto ktlFy; WKpA0: redirect("\x61\165\x74\x68"); goto DbOls; rBfb3: $this->load->model("\115\x61\x73\x74\x65\x72\x5f\155\157\144\145\x6c", "\155\x61\x73\x74\x65\162"); goto mFEis; DbOls: jAy9L: goto LVwbn; A67yQ: SYGSp: goto OobAJ; w4WI0: OOZV3: goto WKpA0; qh5og: show_error("\110\141\x6e\171\141\x20\101\x64\x6d\x69\x6e\151\x73\164\x72\141\x74\x6f\162\x20\171\141\x6e\x67\x20\144\x69\x62\x65\162\151\x20\x68\141\153\40\165\x6e\164\165\x6b\x20\155\145\156\x67\141\x6b\163\145\163\40\x68\141\x6c\141\x6d\141\x6e\x20\151\156\151\x2c\x20\74\141\40\150\x72\x65\x66\75\x22" . base_url("\x64\141\163\x68\142\x6f\x61\162\x64") . "\x22\x3e\x4b\x65\155\x62\141\154\x69\x20\x6b\x65\40\155\x65\x6e\165\40\x61\167\141\x6c\x3c\57\x61\76", 403, "\x41\x6b\x73\145\x73\40\124\145\x72\154\x61\162\141\156\147"); goto A67yQ; rfb_k: $this->load->model("\114\x6f\x67\137\155\157\x64\145\154", "\154\157\x67\147\x69\x6e\147"); goto MCJbZ; mFEis: $this->load->model("\x44\x61\163\150\142\x6f\141\x72\144\x5f\155\x6f\x64\x65\x6c", "\144\x61\x73\150\142\157\141\x72\144"); goto rfb_k; OobAJ: goto jAy9L; goto w4WI0; y7og0: } public function output_json($data, $encode = true) { goto G3FzV; G3FzV: if (!$encode) { goto BNTic; } goto lHIph; AVunD: BNTic: goto f9KJx; f9KJx: $this->output->set_content_type("\141\160\x70\154\151\143\141\x74\x69\x6f\x6e\57\x6a\x73\157\156")->set_output($data); goto mGi5x; lHIph: $data = json_encode($data); goto AVunD; mGi5x: } public function index() { goto on7zF; LW1LS: $data["\152\155\154\x5f\x68\x61\x72\151"] = $jml == null ? "\60" : $jml->jml_hari_efektif; goto bEcLq; TjLH_: $data["\x74\160"] = $this->dashboard->getTahun(); goto hXV8k; hXV8k: $data["\x74\x70\x5f\x61\x63\x74\x69\166\145"] = $tp; goto VgMs1; rNYIU: $data = ["\x75\163\145\x72" => $user, "\152\165\x64\165\154" => "\x54\141\x68\x75\x6e\40\x50\x65\x6c\x61\x6a\141\162\141\x6e\x20\144\x61\x6e\x20\x53\x65\155\x65\x73\164\145\162", "\163\165\x62\x6a\x75\144\165\x6c" => "\x41\164\165\162\40\x54\141\150\165\x6e\40\120\x65\154\141\152\141\x72\141\x6e\x20\x64\141\x6e\x20\123\x65\x6d\145\x73\x74\145\162", "\x70\162\x6f\x66\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\164\x74\151\x6e\x67" => $this->dashboard->getSetting()]; goto xMDpD; ApXgc: $data["\163\155\164\x5f\x61\143\164\x69\x76\145"] = $smt; goto kMtEy; on7zF: $user = $this->ion_auth->user()->row(); goto rNYIU; VgMs1: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto ApXgc; xMDpD: $tp = $this->dashboard->getTahunActive(); goto VXMBm; VXMBm: $smt = $this->dashboard->getSemesterActive(); goto TjLH_; r9j4F: $this->load->view("\137\164\145\x6d\160\154\141\164\145\163\57\x64\141\x73\x68\142\x6f\141\x72\144\x2f\x5f\x66\157\157\x74\145\162"); goto Pl3GE; bEcLq: $this->load->view("\x5f\164\x65\155\160\x6c\x61\x74\x65\163\x2f\x64\x61\163\150\x62\x6f\141\x72\x64\x2f\x5f\150\x65\141\x64\145\x72", $data); goto qmOPC; kMtEy: $jml = $this->master->getJmlHariEfektif($tp->id_tp . $smt->id_smt); goto LW1LS; qmOPC: $this->load->view("\x6d\x61\163\164\145\162\57\x74\x61\150\165\156\x2f\144\141\164\x61"); goto r9j4F; Pl3GE: } public function data() { $this->output_json($this->dashboard->getDataTahun(), false); } public function gantiTahun() { goto nI9Ls; PgFXS: $data["\165\x70\144\x61\164\145"] = $update; goto A0eXV; ImFD2: $this->logging->saveLog(4, "\x6d\145\x6e\147\x67\141\156\x74\151\x20\x74\141\x68\165\x6e\40\141\x6a\141\162\x61\x6e\40\141\x6b\164\x69\x66"); goto TyTfP; ltmHA: foreach ($inputTp as $tps) { goto VS4GZ; SljCv: $tahun = $tps->tp; goto le47i; tKkHI: goto U5AL9; goto wgnzt; wgnzt: YYQLT: goto tQjXn; P5wNn: $active = 0; goto tKkHI; le47i: if ($id_tp === $aktif) { goto YYQLT; } goto P5wNn; BvBXg: AKRJR: goto BfsbH; tQjXn: $active = 1; goto Fje6u; dpJsw: $update[] = array("\x69\x64\x5f\x74\160" => $id_tp, "\164\x61\150\165\x6e" => $tahun, "\141\143\x74\x69\x76\145" => $active); goto BvBXg; VS4GZ: $id_tp = $tps->id; goto SljCv; Fje6u: U5AL9: goto dpJsw; BfsbH: } goto d91VN; Iu7gL: $data["\155\163\147"] = "\x4d\145\x72\x75\142\141\150\x20\124\x61\150\165\156\40\101\153\x74\151\146"; goto PgFXS; A0eXV: $data["\x73\x74\x61\x74\165\x73"] = true; goto ImFD2; sYKlj: $inputTp = json_decode($this->input->post("\x74\141\x68\x75\156", false)); goto ltmHA; nI9Ls: $aktif = $this->input->post("\141\x63\x74\x69\166\x65", true); goto sYKlj; TyTfP: $this->output_json($data); goto K4k1C; QFN45: $this->dashboard->update("\x6d\141\x73\164\x65\162\x5f\164\x70", $update, "\x69\x64\x5f\164\x70", null, true); goto Iu7gL; d91VN: wFadn: goto QFN45; K4k1C: } public function gantiSemester() { goto yfgY7; KP2av: $data["\x6d\163\x67"] = "\x4d\x65\x72\x75\142\x61\x68\40\123\145\x6d\x65\163\x74\145\x72\x20\101\x6b\164\151\146"; goto nrj0k; Xn7zB: $data["\163\164\x61\164\165\x73"] = true; goto A5C2B; i_aU2: $this->dashboard->update("\x6d\x61\163\164\145\x72\137\163\155\164", $update, "\x69\x64\137\x73\155\164", null, true); goto KP2av; nrj0k: $data["\165\x70\x64\x61\164\x65"] = $update; goto Xn7zB; A5C2B: $this->logging->saveLog(4, "\155\145\156\147\147\141\156\164\x69\40\163\145\x6d\145\163\x74\145\x72\x20\x61\x6b\164\x69\146"); goto Nul1J; nAJtU: foreach ($inputSmt as $tps) { goto VdNAU; quSes: qlKpW: goto V1OF2; RzkiX: if ($id_smt === $aktif) { goto zkyBc; } goto UlXDK; l83wz: goto qlKpW; goto Ol2Nc; V1OF2: $update[] = array("\151\144\x5f\x73\155\x74" => $id_smt, "\x73\155\164" => $smt, "\x61\x63\164\x69\x76\x65" => $active); goto OhQxy; tecPo: $smt = $tps->Semester; goto RzkiX; UlXDK: $active = 0; goto l83wz; OhQxy: y5Yes: goto X8o1f; VdNAU: $id_smt = $tps->id; goto tecPo; Ol2Nc: zkyBc: goto Kn7Gh; Kn7Gh: $active = 1; goto quSes; X8o1f: } goto UfAp5; V75JS: $inputSmt = json_decode($this->input->post("\163\x65\155\145\x73\x74\145\x72", false)); goto nAJtU; Nul1J: $this->output_json($data); goto HkJRy; yfgY7: $aktif = $this->input->post("\141\x63\x74\x69\x76\145", true); goto V75JS; UfAp5: kd8wr: goto i_aU2; HkJRy: } public function add() { goto CdFj1; CdFj1: $method = $this->input->post("\x6d\145\164\150\x6f\144", true); goto gIumM; EAHg_: $this->output->set_content_type("\x61\160\160\x6c\x69\x63\x61\164\151\157\x6e\x2f\x6a\163\157\156")->set_output($data); goto k23Qx; rRkjT: $id = $this->input->post("\x69\144\137\164\141\150\x75\156", true); goto dEQ9x; SylPe: NlYbR: goto EAHg_; lOrLO: if ($method === "\141\144\144") { goto JzBzt; } goto rRkjT; onp7P: $data = $this->master->create("\155\141\x73\164\x65\162\x5f\164\160", $insert); goto mYxOW; joPdG: $data = $this->master->update("\x6d\x61\163\x74\145\x72\137\x74\160", $update, "\151\x64\137\164\160", $id); goto KCwW4; mYxOW: $this->logging->saveLog(3, "\x6d\x65\x6e\x61\x6d\x62\141\150\40\164\x61\150\x75\x6e\x20\160\145\154\x61\152\141\x72\141\156"); goto SylPe; KCwW4: $this->logging->saveLog(4, "\155\x65\x6e\x67\x65\x64\x69\164\40\164\x61\150\165\x6e\40\x70\145\154\141\152\141\162\x61\x6e"); goto MJvSU; gGdQf: $insert = ["\x74\141\150\165\x6e" => $tahun]; goto onp7P; gIumM: $tahun = $this->input->post("\x74\x61\x68\x75\x6e", true); goto lOrLO; dEQ9x: $update = array("\x69\x64\137\164\x70" => $id, "\x74\141\150\x75\156" => $tahun); goto joPdG; MJvSU: goto NlYbR; goto lYT2P; lYT2P: JzBzt: goto gGdQf; k23Qx: } public function saveHariEfektif() { goto dY1Xk; f46w1: $update = $this->db->replace("\155\x61\x73\x74\145\x72\137\x68\141\x72\151\x5f\x65\146\x65\x6b\164\151\146", $input); goto icsTq; MiDZa: $input = ["\151\x64\137\x68\x61\162\x69\137\x65\146\145\153\x74\x69\146" => $tp->id_tp . $smt->id_smt, "\152\155\154\137\150\x61\162\151\137\145\146\145\x6b\164\x69\146" => $this->input->post("\x6a\155\x6c\137\x68\141\x72\151", true)]; goto f46w1; g361S: $smt = $this->dashboard->getSemesterActive(); goto MiDZa; icsTq: $data["\163\x74\x61\x74\x75\163"] = $update; goto KeGqX; KeGqX: $this->output_json($data); goto CIRWR; dY1Xk: $tp = $this->dashboard->getTahunActive(); goto g361S; CIRWR: } public function hapusTahun() { goto FnWys; FnWys: $id = $this->input->post("\x68\x61\x70\x75\x73", true); goto F_zfv; k0zHT: goto bajXB; goto zmsFv; qJ1w3: $data["\x6d\163\147"] = "\x4d\x65\x6e\x67\150\141\160\x75\163\40\124\x61\x68\x75\x6e\x20\x50\145\x6c\141\x6a\141\x72\141\x6e"; goto jdHhl; jdHhl: $this->output_json($data); goto x2N9x; mBqWW: $data["\163\164\x61\164\165\x73"] = false; goto k0zHT; Wut3w: $data["\x73\164\141\x74\165\x73"] = true; goto TM5aL; TM5aL: bajXB: goto qJ1w3; F_zfv: if ($this->dashboard->hapus("\x6d\x61\x73\164\x65\x72\x5f\164\x70", $id, "\x69\144\x5f\164\x70")) { goto d6Vaj; } goto mBqWW; KTpic: $this->logging->saveLog(5, "\x6d\145\x6e\147\x68\141\x70\x75\163\40\x74\141\x68\x75\156\x20\x70\145\154\x61\152\x61\162\141\x6e"); goto Wut3w; zmsFv: d6Vaj: goto KTpic; x2N9x: } public function hapus() { goto xSYSH; eboGv: $this->logging->saveLog(5, "\x6d\145\156\x67\150\141\160\x75\x73\40\164\x61\x68\x75\156\x20\x70\x65\x6c\x61\152\x61\162\141\x6e"); goto COjgX; wEgZw: goto ARsHN; goto YXFkb; s31ap: if (!$chk) { goto RGVGR; } goto H2MbC; H2MbC: if (!$this->dashboard->hapus("\x6d\x61\163\164\145\x72\137\x74\x70", $chk, "\x69\x64\x5f\x74\160")) { goto sX29d; } goto eboGv; fpDoC: ARsHN: goto GQVt5; APP9I: sX29d: goto wEgZw; COjgX: $this->output_json(["\163\x74\141\164\165\163" => true, "\164\157\164\141\x6c" => count($chk)]); goto APP9I; xSYSH: $chk = $this->input->post("\x63\150\145\x63\x6b\145\144", true); goto s31ap; YXFkb: RGVGR: goto TahQb; TahQb: $this->output_json(["\x73\x74\141\164\165\x73" => false]); goto fpDoC; GQVt5: } }
<?php
class Cbtjenis extends CI_Controller { public function __construct() { goto BGKm6; DLatP: goto rjV2X; goto uv1cq; TZ4EC: rjV2X: goto bPSsB; g7eRN: $this->form_validation->set_error_delimiters('', ''); goto iAJLX; uv1cq: t7yVd: goto jyB5t; bPSsB: $this->load->library(["\x64\141\164\x61\164\141\142\x6c\x65\163", "\146\157\162\x6d\137\166\x61\154\x69\x64\141\x74\151\157\156"]); goto g7eRN; BGKm6: parent::__construct(); goto Hc95_; CgRDx: show_error("\110\x61\156\x79\x61\x20\101\x64\155\x69\156\x69\163\164\x72\141\x74\157\162\x20\171\x61\x6e\x67\x20\144\x69\142\145\162\151\x20\150\x61\x6b\40\x75\x6e\x74\165\153\x20\155\x65\156\x67\x61\x6b\x73\145\x73\x20\x68\x61\154\x61\x6d\141\156\x20\x69\156\x69\54\40\x3c\141\40\x68\162\145\x66\75\x22" . base_url("\x64\x61\163\x68\142\157\x61\x72\144") . "\42\x3e\x4b\x65\155\142\x61\x6c\151\40\x6b\145\x20\x6d\145\156\x75\x20\x61\167\x61\x6c\x3c\57\x61\x3e", 403, "\101\153\x73\145\x73\40\x54\145\x72\x6c\141\x72\x61\156\x67"); goto Vu9DZ; jyB5t: redirect("\x61\165\164\150"); goto TZ4EC; Hc95_: if (!$this->ion_auth->logged_in()) { goto t7yVd; } goto ol3yZ; Vu9DZ: Gb_14: goto DLatP; ol3yZ: if ($this->ion_auth->is_admin()) { goto Gb_14; } goto CgRDx; iAJLX: } public function output_json($data, $encode = true) { goto qcDgp; fbqwj: hKX4P: goto wBVlL; wBVlL: $this->output->set_content_type("\141\160\x70\154\151\x63\141\x74\151\x6f\156\57\x6a\x73\157\156")->set_output($data); goto PAPkp; skqXF: $data = json_encode($data); goto fbqwj; qcDgp: if (!$encode) { goto hKX4P; } goto skqXF; PAPkp: } public function index() { goto nEN7M; IAn4m: $this->load->view("\x5f\x74\x65\x6d\x70\x6c\x61\164\145\163\x2f\144\141\163\x68\142\157\141\x72\x64\x2f\137\x66\157\x6f\x74\x65\162"); goto ZkKGA; TdO4t: $data["\x73\x6d\x74\137\x61\x63\164\151\166\145"] = $this->dashboard->getSemesterActive(); goto cA1eG; jOqp9: $this->load->view("\143\142\x74\57\152\x65\156\151\x73\57\x64\141\x74\x61"); goto IAn4m; dI07B: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto TdO4t; x7XXl: $data = ["\165\x73\145\x72" => $user, "\152\165\144\165\154" => "\x4a\x65\x6e\x69\163\x20\x55\x6a\151\141\x6e", "\163\165\x62\152\x75\x64\165\154" => "\x44\x61\x74\x61\x20\x4a\x65\x6e\151\x73\x20\125\x6a\151\x61\156", "\160\162\157\146\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto mpQ90; cA1eG: $this->load->view("\x5f\164\x65\155\x70\154\x61\164\x65\163\x2f\144\141\x73\150\142\157\141\x72\144\57\137\x68\145\x61\x64\x65\x72", $data); goto jOqp9; SOoB9: $data["\164\160\137\x61\x63\x74\151\x76\x65"] = $this->dashboard->getTahunActive(); goto dI07B; mpQ90: $data["\x74\160"] = $this->dashboard->getTahun(); goto SOoB9; nEN7M: $this->load->model("\x44\141\163\150\x62\x6f\x61\162\144\137\155\157\x64\145\x6c", "\x64\x61\x73\x68\x62\157\x61\162\144"); goto YmUln; YmUln: $user = $this->ion_auth->user()->row(); goto x7XXl; ZkKGA: } public function data() { $this->load->model("\x43\142\x74\x5f\155\157\144\145\x6c", "\x63\x62\x74"); $this->output_json($this->cbt->getJenis(), false); } public function add() { goto Lj5Cx; Lj5Cx: $this->load->model("\115\x61\163\164\x65\x72\137\155\x6f\x64\x65\x6c", "\155\141\x73\164\145\162"); goto Nptaq; SQnWl: $this->output_json($data); goto OZaPV; OPTwD: $data["\x73\x74\141\164\165\x73"] = $insert; goto SQnWl; kNkb9: $this->master->create("\x63\x62\x74\137\152\x65\x6e\x69\163", $insert, false); goto OPTwD; Nptaq: $insert = ["\156\x61\155\x61\137\152\x65\156\151\x73" => $this->input->post("\156\141\155\141\137\152\x65\156\x69\x73", true), "\x6b\157\x64\x65\137\152\x65\x6e\151\x73" => $this->input->post("\153\157\x64\145\x5f\x6a\145\x6e\x69\x73", true)]; goto kNkb9; OZaPV: } public function update() { goto oVRQe; m8PEL: $data = $this->cbt->updateJenis(); goto OJxPt; OJxPt: $this->output->set_content_type("\141\x70\160\154\x69\x63\141\164\x69\x6f\156\x2f\152\163\157\x6e")->set_output($data); goto lN220; oVRQe: $this->load->model("\x43\x62\164\137\x6d\x6f\144\x65\x6c", "\x63\142\x74"); goto m8PEL; lN220: } public function delete() { goto K9XAg; K9XAg: $this->load->model("\115\x61\x73\x74\x65\162\137\155\x6f\144\x65\x6c", "\x6d\x61\x73\164\145\x72"); goto ZEvxo; ZEvxo: $chk = $this->input->post("\x63\x68\x65\x63\153\145\x64", true); goto TsXot; sGIyd: $this->output_json(["\x73\x74\x61\164\165\x73" => true, "\164\157\x74\x61\154" => count($chk)]); goto G39Pj; acYOi: goto YuypB; goto KcDsS; uGYcy: YuypB: goto QOutd; DAY_W: $this->output_json(["\x73\x74\x61\164\165\163" => false]); goto uGYcy; TsXot: if (!$chk) { goto jpWu9; } goto mQKU6; KcDsS: jpWu9: goto DAY_W; G39Pj: hgyVb: goto acYOi; mQKU6: if (!$this->master->delete("\x63\x62\164\137\x6a\x65\156\x69\x73", $chk, "\151\144\137\x6a\145\156\151\x73")) { goto hgyVb; } goto sGIyd; QOutd: } public function saveLog($type, $desc) { goto RARan; yg_Ly: $this->logging->saveLog($type, $desc); goto K0oIn; GgG1Q: $user = $this->ion_auth->user()->row(); goto yg_Ly; RARan: $this->load->model("\114\157\147\137\155\157\x64\x65\154", "\x6c\157\147\147\x69\156\x67"); goto GgG1Q; K0oIn: } }
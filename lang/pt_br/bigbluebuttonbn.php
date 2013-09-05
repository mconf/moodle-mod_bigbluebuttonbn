<?php
/**
 * Language File
 *
 * Authors:
 *    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 *    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 *    
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010-2012 Blindside Networks
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 * Traduzido para o portugues por Luciano Silva lucianoes@ufrgs.br para uso com o Mconf
 */

defined('MOODLE_INTERNAL') || die();
$string['bbbduetimeoverstartingtime'] = 'O tempo final para esta atividade deve ser maior que o tempo de início';
$string['bbbdurationwarning'] = 'A duração máxim para esta sessão é de %duration% minutos.';
$string['bbbfinished'] = 'Esta atividade acabou.';
$string['bbbinprocess'] = 'Esta atividade está em andamento.';
$string['bbbnorecordings'] = 'Não há gravações ainda, por favor retorne mais tarde.';
$string['bbbnotavailableyet'] = 'Lamentamos, mas esta sessão ainda não está disponível.';
$string['bbbrecordwarning'] = 'Esta sessão está sendo gravada.';
$string['bbburl'] = 'A URL de seu servidor BigBlueButton deverá terminar com  /bigbluebutton/. (Esta URL default é do servidor BigBlueButton de testes da Blindside Networks.)';
$string['bigbluebuttonbn:join'] = 'Participar de uma reunião.';
$string['bigbluebuttonbn:moderate'] = 'Moderar uma reunião';
$string['bigbluebuttonbn:addinstance'] = 'Adicionar uma nova webconferência';
$string['bigbluebuttonbn'] = ' Mconf Webconferência';
$string['bigbluebuttonbnfieldset'] = 'Exemplo de campo customizado';
$string['bigbluebuttonbnintro'] = 'Mconf BigBlueButton Introdução';
$string['bigbluebuttonbnSalt'] = 'Mconf BigBlueButton Shared Secret';
$string['bigbluebuttonbnUrl'] = 'Mconf BigBlueButton URL do servidor';
$string['bigbluebuttonbnWait'] = 'Usuário deve esperar';
$string['configsecuritysalt'] = 'O Salt de segurança do Mconf BigBlueButton server.  (Este Salt default é do servidor BigBlueButton de testes da Blindside Networks.)';
$string['general_error_unable_connect'] = 'Incapaz de conectar. Por favor verifique a url do servidor Mconf BigBlueButton e verifique se este servidor está ativo.';
$string['index_confirm_end'] = 'Você deseja encerrar a webconferência?';
$string['index_disabled'] = 'desabilitado';
$string['index_enabled'] = 'habilitado';
$string['index_ending'] = 'Encerrando a webconferência ... por favor aguarde';
$string['index_error_checksum'] = 'A checksum error occurred. Make sure you entered the correct salt.';
$string['index_error_forciblyended'] = 'Incapaz de acessar a webconferências pos ela foi encerrada manualmente.';
$string['index_error_unable_display'] = 'Incapaz de mostrar as webconferências. Por favor verifique se a URL do servidor Mconf BigBlueButton está certa e se o servidor está ativo.';
$string['index_heading_actions'] = 'Ações';
$string['index_heading_group'] = 'Grupo';
$string['index_heading_moderator'] = 'Moderadores';
$string['index_heading_name'] = 'Sala';
$string['index_heading_recording'] = 'Gravações';
$string['index_heading_users'] = 'Ususários';
$string['index_heading_viewer'] = 'Visualizadores';
$string['index_heading'] = 'Salas Mconf';
$string['index_running'] = 'rodando';
$string['index_warning_adding_meeting'] = 'Incapaz de designar um novo ID de reunião.';
$string['mod_form_block_general'] = 'Configurações webconferência';
$string['mod_form_block_record'] = 'Configurações de gravação';
$string['mod_form_block_schedule'] = 'Agendamento das sessões';
$string['mod_form_field_availabledate'] = 'Participação liberada';
$string['mod_form_field_description'] = 'Descrição da sessão a ser gravada.';
$string['mod_form_field_duedate'] = 'Participação encerrada';
$string['mod_form_field_duration'] = 'Duração';
$string['mod_form_field_duration_help'] = 'Marcar a duração máxima para uma reunião irá estabelecer o tempo máximo para que uma reunião fique ativa antes da gravação acabar.';
$string['mod_form_field_limitusers'] = 'Limitar usuários';
$string['mod_form_field_limitusers_help'] = 'Limite máximo de usuários permitidos em uma reunião';
$string['mod_form_field_name'] = 'Nome da sala de webconferência';
$string['mod_form_field_newwindow'] = 'Abrir Mconf em uma nova janela';
$string['mod_form_field_record'] = 'Gravação';
$string['mod_form_field_voicebridge_help'] = 'Número da conferência de voz que os participantes digitam para participar na conferência de voz.';
$string['mod_form_field_voicebridge'] = 'Voice bridge';
$string['mod_form_field_wait'] = 'Os estudantes devem esperar até que um moderador entre';
$string['mod_form_field_welcome_default'] = '<br>Bem vindo(a) a(o) <b>%%CONFNAME%%</b>!<br><br>Para entender como o Mconf BigBlueButton funciona veja nosso <a href="event:http://www.bigbluebutton.org/content/videos"><u>tutorial videos</u></a>.<br><br>Para participar da audio bridge clique no ícone do headset(canto superior esquerdo). <b>Por favor use um headset para não causar ruídos para outras pessoas.</b>';
$string['mod_form_field_welcome_help'] = 'Troca a mensagem padrão setada para o servidor Mconf BigBlueButton. A mensagem pode incluir palavras-chave (%%CONFNAME%%, %%DIALNUM%%, %%CONFNUM%%) que serão subistuídas automaticamente, e também as tags html tais como <b>...</b> or <i></i> ';
$string['mod_form_field_welcome'] = 'Mensagem de boas-vindas';
$string['modulename'] = 'Mconf Webconferência';
$string['modulenameplural'] = 'Mconf Webconferência';
$string['modulename_help'] = 'Na atividade  Mconf Webconferência você pode criar uma sala de webconferências a partir do Moodle e especificar título, descrição, período de utilização, grupos e detalhes sobre a gravação da sessão. IMPORTANTE: Para visualizar as gravações posteriormente adicione o recurso "Gravações Webconferências Mconf" para este curso antes de iniciar as sessões.';
$string['pluginname'] = 'Mconf';
$string['serverhost'] = 'Nome do webserver';
$string['view_error_no_group_student'] = 'Você não está vinculado a um grupo. Por favor contate seu Professour ou o Administrador.';
$string['view_error_no_group_teacher'] = 'Não há grupos configurados ainda. Por favor defina grupos ou contate o Aministrador.';
$string['view_error_no_group'] = 'Não há grupos configurados ainda. Por favor defina grupos antes de tentar participar da webconferência.';
$string['view_error_unable_join'] = 'Incapaz de entrar na reunião.Por favor verifique se a url do servidor Mconf está correta e se o servidor está executando.';
$string['view_error_unable_join_student'] = 'Não foi possível conectar-se ao servidor Mconf. Por favor contate seu Professor ou o Suporte Pedagógico.';
$string['view_error_unable_join_teacher'] = 'Não foi possível conectar-se ao servidor Mconf. Por favor contate o Suporte Pedagógico.';
$string['view_groups_selection_join'] = 'Participar';
$string['view_groups_selection'] = 'Selecione o grupo que você deseja participar e confirme a ação';
$string['view_login_moderator'] = 'Logando-se como moderador...';
$string['view_login_viewer'] = 'Logando-se como observador.';
$string['view_noguests'] = 'O Mconf Webconferência não é aberto para convidados';
$string['view_nojoin'] = 'Você não possui privilégios para participar desta sessão.';
$string['view_recording_list_actionbar_delete'] = 'Deletar';
$string['view_recording_list_actionbar_hide'] = 'Ocultar';
$string['view_recording_list_actionbar_show'] = 'Mostrar';
$string['view_recording_list_actionbar'] = 'Ferramentas';
$string['view_recording_list_activity'] = 'Atividade';
$string['view_recording_list_course'] = 'Curso';
$string['view_recording_list_date'] = 'Data';
$string['view_recording_list_description'] = 'Descrição';
$string['view_recording_list_duration'] = 'Duração';
$string['view_recording_list_recording'] = 'Gravações';
$string['view_wait'] = 'A webconferência ainda não começou. Aguardando o moderador...';

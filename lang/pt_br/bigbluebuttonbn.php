<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language File
 *
 * @package   mod_bigbluebuttonbn
 * @author    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 * @author    Luciano Silva  (lucianoes [at] ufrgs [dt] br)
 * @author    Felipe Cecagno  (felipe [at] Elos [dt] com)
 * @copyright 2010-2015 Blindside Networks Inc.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */
defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Você tem sessões Elos a seguir';
$string['bbbduetimeoverstartingtime'] = 'O horário de encerramento desta atividade deve ser maior do que o horário de início';
$string['bbbdurationwarning'] = 'A duração máxima desta sessão é %duration% minutos.';
$string['bbbrecordwarning'] = 'Esta sessão pode ser gravada.';
$string['bigbluebuttonbn:join'] = 'Entrar em uma webconferência';
$string['bigbluebuttonbn:moderate'] = 'Moderar uma webconferência';
$string['bigbluebuttonbn:managerecordings'] = 'Gerenciar gravações';
$string['bigbluebuttonbn:addinstance'] = 'Adicionar uma nova webconferência';
$string['bigbluebuttonbn'] = 'Elos';


$string['config_general'] = 'Configurações gerais';
$string['config_general_description'] = 'Essas configurações estão <b>sempre</b> ativas';
$string['config_server_url'] = 'URL do servidor Elos';
$string['config_server_url_description'] = 'A URL de seu servidor Elos deve terminar com /bigbluebutton/. (Esta URL padrão é de um servidor BigBlueButton de testes da Blindside Networks.)';
$string['config_shared_secret'] = 'Chave de segurança';
$string['config_shared_secret_description'] = 'Chave de segurança do servidor Elos. (Esta chave padrão é de um servidor BigBlueButton de testes da Blindside Networks.)';
$string['config_detect_mobile'] = 'Detectar Acesso de Clientes Móveis';
$string['config_detect_mobile_description'] = 'Tentar detectar se a conferência está sendo acessada por um dispositivo móvel e redirecionar para o cliente móvel.';
$string['config_feature_recording'] = 'Configurações da funcionalidade "Gravação"';
$string['config_feature_recording_description'] = 'Essas configurações são específicas para esta funcionalidade';
$string['config_feature_recording_default'] = 'Gravação habilitada por padrão';
$string['config_feature_recording_default_description'] = 'Quando habilitado, sessões criadas no Elos iniciarão gravando';
$string['config_feature_recording_editable'] = 'Gravação pode ser modificada';
$string['config_feature_recording_editable_description'] = 'Quando habilitado, o moderador optar por interromper e iniciar novamente a gravação.';
$string['config_feature_recording_icons_enabled'] = 'Ícones para gerenciamento de gravações';
$string['config_feature_recording_icons_enabled_description'] = 'Quando habilitado, o painel de gerenciamento de gravações mostra ícones para publicar/despublicar e deletar gravações.';

$string['config_feature_recordingtagging'] = 'Configurações da funcionalidade "Tagueamento de gravações"';
$string['config_feature_recordingtagging_description'] = 'Essas configurações são específicas para esta funcionalidade';
$string['config_feature_recordingtagging_default'] = 'Tagueamento de gravações habilitado por padrão';
$string['config_feature_recordingtagging_default_description'] = 'Tagueamento de gravações é habilitado por padrão quando uma nova sala ou conferência é criada.<br>Quando esta funcionalidade está habilitada, uma página intermediária que permite a entrada de uma descrição e tags é exibida ao primeiro moderador que entrar na conferência. Estes dados são usados posteriormente para identificar a gravação na lista.';
$string['config_feature_recordingtagging_editable'] = 'Opção de tagueamento de gravações pode ser editada';
$string['config_feature_recordingtagging_editable_description'] = 'O tagueamento de gravações por padrão pode ser editado quando uma sala ou conferência é criada ou atualizada.';

$string['config_feature_importrecordings'] = 'Configurações da funcionalidade "Importar gravações"';
$string['config_feature_importrecordings_description'] = 'Essas configurações são específicas para esta funcionalidade';
$string['config_feature_importrecordings_enabled'] = 'Importar gravações habilitado';
$string['config_feature_importrecordings_enabled_description'] = 'Quando esta e a funcionalidade de gravação estiverem habilitadas, é possível importar gravações de outros cursos para dentro de uma atividade.';
$string['config_feature_importrecordings_from_deleted_activities_enabled'] = 'Importar gravações de uma atividade apagada habilitado';
$string['config_feature_importrecordings_from_deleted_activities_enabled_description'] = 'Quando esta e a funcionalidade de importar gravações estiverem habilitadas, é possível importar gravações de atividades que já não fazem mais parte do curso.';

$string['config_feature_waitformoderator'] = 'Configurações da funcionalidade "Esperar pelo moderador"';
$string['config_feature_waitformoderator_description'] = 'Essas configurações são específicas para esta funcionalidade';
$string['config_feature_waitformoderator_default'] = 'Espera pelo moderador habilitada por padrão';
$string['config_feature_waitformoderator_default_description'] = 'A funcionalidade de espera pelo moderador é habilitada por padrão quando uma nova sala ou conferência é adicionada.';
$string['config_feature_waitformoderator_editable'] = 'Espera pelo moderador pode ser editada';
$string['config_feature_waitformoderator_editable_description'] = 'A funcionalidade de espera pelo moderador por padrão pode ser editada quando uma sala ou conferência é criada ou atualizada.';
$string['config_feature_waitformoderator_ping_interval'] = 'Ping de espera pelo moderador (segundos)';
$string['config_feature_waitformoderator_ping_interval_description'] = 'Quando a funcionalidade de espera pelo moderador está habilitada, o cliente consulta o status da sessão a cada [numero] segundos. Este parâmetro define o intervalo entre requisições para o servidor Moodle';
$string['config_feature_waitformoderator_cache_ttl'] = 'TTL de cache de espera pelo moderador (segundos)';
$string['config_feature_waitformoderator_cache_ttl_description'] = 'Para suportar um maior número de clientes este plugin usa uma cache. Este parâmetro define o tempo em segundos que a cache será mantida até que a próxima requisição seja realizada ao servidor Elos.';

$string['config_feature_voicebridge'] = 'Configurações da funcionalidade "Voice bridge"';
$string['config_feature_voicebridge_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores padrão para essas opções.';
$string['config_feature_voicebridge_editable'] = 'Voice Bridge da conferência pode ser editada';
$string['config_feature_voicebridge_editable_description'] = 'O número de conferência Voice Bridge pode ser atribuído permanentemente a uma sala. Quando atribuído, o número não pode ser usado por nenhuma outra sala ou conferência';

$string['config_feature_preuploadpresentation'] = 'Configurações da funcionalidade "Pré-carregamento de apresentação"';
$string['config_feature_preuploadpresentation_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores padrão para essas opções.';
$string['config_feature_preuploadpresentation_enabled'] = 'Pré-carregamento de apresentação habilitado';
$string['config_feature_preuploadpresentation_enabled_description'] = 'Pré-carregamento de apresentação é habilitado na interface quando a sala ou conferência é adicionada ou atualizada.';

$string['config_permission'] = 'Configuração de permissões';
$string['config_permission_description'] = 'Estas configurações definem as permissões padrão para salas ou conferências criadas.';
$string['config_permission_moderator_default'] = 'Moderador por padrão';
$string['config_permission_moderator_default_description'] = 'Este papel é usado por padrão quando uma nova sala ou conferência é adicionada.';

$string['config_feature_userlimit'] = 'Configuração para "Limite de usuários"';
$string['config_feature_userlimit_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores padrão para essas opções.';
$string['config_feature_userlimit_default'] = 'Limite de usuários habilitado por padrão';
$string['config_feature_userlimit_default_description'] = 'O número de usuário permitidos por padrão em uma sessão quando uma sala ou conferência é adicionada. Caso o número seja 0, nenhum limite é definido';
$string['config_feature_userlimit_editable'] = 'Limite de usuários pode ser editado';
$string['config_feature_userlimit_editable_description'] = 'Limite de usuários pode ser editado quando uma sala ou conferência é criada ou atualizada.';

$string['config_scheduled'] = 'Configurações para "Sessões programadas"';
$string['config_scheduled_description'] = 'Estas configurações definem o comportamento padrão de sessões programadas.';
$string['config_scheduled_duration_enabled'] = 'Calcular duração habilitado';
$string['config_scheduled_duration_enabled_description'] = 'A duração de uma sessão programada é calculada baseada no tempo de início e fim da sessão.';
$string['config_scheduled_duration_compensation'] = 'Tempo compensatório (minutos)';
$string['config_scheduled_duration_compensation_description'] = 'Minutos adicionados ao tempo de fim programado ao calcular a duração.';
$string['config_scheduled_pre_opening'] = 'Acessível antes do tempo de abertura (minutos)';
$string['config_scheduled_pre_opening_description'] = 'Tempo em minutos que a sessão é acessível antes do tempo programado para a início.';

$string['config_feature_sendnotifications'] = 'Configurações da funcionalidade "Enviar notificações"';
$string['config_feature_sendnotifications_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores padrão para essas opções.';
$string['config_feature_sendnotifications_enabled'] = 'Enviar notificações habilitado';
$string['config_feature_sendnotifications_enabled_description'] = 'Enviar notificações é habilitado na interface quando a sala ou conferência é adicionada ou atualizada.';

$string['config_extended_capabilities'] = 'Configurações para capacidades estendidas';
$string['config_extended_capabilities_description'] = 'Configurações para capacidades estendidas quando o servidor Elos as disponibiliza.';
$string['config_extended_feature_uidelegation_enabled'] = 'Delegação de UI habilitado';
$string['config_extended_feature_uidelegation_enabled_description'] = 'Essas configurações habilitam ou desabilitam a delegação de UI no servidor Elos.';
$string['config_extended_feature_recordingready_enabled'] = 'Notificações quando a gravação estiver pronta habilitado';
$string['config_extended_feature_recordingready_enabled_description'] = 'Notificações quando uma gravação estiver pronta está habilitada.';

$string['config_warning_curl_not_installed'] = 'Esta funcionalidade requer a extensão CURL para PHP instalada e habilitada. As configurações serão acessíveis somente se esta condição for satisfeita.';

$string['general_error_unable_connect'] = 'Não foi possível conectar. Por favor, verifique a URL do servidor Elos e se o servidor está ativo.';

$string['index_confirm_end'] = 'Você gostaria de encerrar a webconferência?';
$string['index_disabled'] = 'desabilitado';
$string['index_enabled'] = 'habilitado';
$string['index_ending'] = 'Encerrando a webconferência ... por favor aguarde';
$string['index_error_checksum'] = 'Ocorreu um erro de checksum. Verifique se a chave de segurança do servidor está correta.';
$string['index_error_forciblyended'] = 'Não é possível entrar na webconferência pois ela foi encerrada manualmente.';
$string['index_error_unable_display'] = 'Não é possível exibir as webconferências. Por favor verifique a URL do servidor Elos e se o servidor está ativo.';
$string['index_heading_actions'] = 'Ações';
$string['index_heading_group'] = 'Grupo';
$string['index_heading_moderator'] = 'Moderadores';
$string['index_heading_name'] = 'Sala';
$string['index_heading_recording'] = 'Gravação';
$string['index_heading_users'] = 'Usuários';
$string['index_heading_viewer'] = 'Participantes';
$string['index_heading'] = 'Salas Elos';
$string['mod_form_block_general'] = 'Configurações gerais';
$string['mod_form_block_presentation'] = 'Conteúdo da apresentação';
$string['mod_form_block_participants'] = 'Participantes';
$string['mod_form_block_schedule'] = 'Agendamento de sessão';
$string['mod_form_block_record'] = 'Configurações de gravação';
$string['mod_form_field_openingtime'] = 'Entrada liberada';
$string['mod_form_field_closingtime'] = 'Entrada encerrada';
$string['mod_form_field_intro'] = 'Descrição';
$string['mod_form_field_intro_help'] = 'Uma descrição curta da sala ou conferência';
$string['mod_form_field_duration_help'] = 'A duração máxima define o período de tempo que a sala irá permanecer aberta antes da gravação ser encerrada';
$string['mod_form_field_duration'] = 'Duração';
$string['mod_form_field_userlimit'] = 'Limite de usuários';
$string['mod_form_field_userlimit_help'] = 'Número máximo de usuários permitidos em uma webconferência. Se o limite for atribuído para 0, o número de usuários será ilimitado.';
$string['mod_form_field_name'] = 'Nome da sala de aula virtual';
$string['mod_form_field_room_name'] = 'Nome da sala de webconferência';
$string['mod_form_field_conference_name'] = 'Nome da conferência';
$string['mod_form_field_record'] = 'Sessão pode ser gravada';
$string['mod_form_field_voicebridge'] = 'Voice bridge [####]';
$string['mod_form_field_voicebridge_help'] = 'Número de voice bridge que os participantes podem utilizar para se conectar via SIP. Um número entre 1 e 9999 deve ser digitado. Se o valor for 0, um número aleatório será gerado pelo Elos. O prefixo 7 será utilizado';
$string['mod_form_field_voicebridge_format_error'] = 'Formato inválido. Deve ser um número entre 1 e 9999.';
$string['mod_form_field_voicebridge_notunique_error'] = 'O valor não é único. Este número já está sendo usado por outra sala ou conferência.';
$string['mod_form_field_recordingtagging'] = 'Ativar tagueamento de gravações';
$string['mod_form_field_wait'] = 'Esperar pelo moderador';
$string['mod_form_field_wait_help'] = 'Os participantes devem aguardar a entrada de um moderador';
$string['mod_form_field_welcome'] = 'Mensagem de boas-vindas';
$string['mod_form_field_welcome_help'] = 'Substitua a mensagem padrão configurada pelo Elos. A mensagem pode incluir palavras-chave (%%CONFNAME%%, %%DIALNUM%%, %%CONFNUM%%) que serão substituídas automaticamente, e também tags HTML como <b>...</b> ou <i></i>';
$string['mod_form_field_welcome_default'] = '<br>Seja bem-vindo à sala <b>%%CONFNAME%%</b>!<br><br>Para entender como o Elos funciona, veja nossos <a href="event:https://www.youtube.com/playlist?list=PLVRBAdFv0iD_Cuj67ku9GYsO-BHcK34y5"><u>vídeos tutoriais</u></a>.<br><br>Para habilitar seu microfone, clique no ícone do headset (canto superior esquerdo). <b>Por favor, utilize um headset para não causar ruído para os demais participantes. Para uma melhor experiência, utilize rede cabeada sempre que possível.</b>';
$string['mod_form_field_participant_add'] = 'Adicionar participante';
$string['mod_form_field_participant_list'] = 'Lista de participantes';
$string['mod_form_field_participant_list_type_all'] = 'Todos usuários inscritos';
$string['mod_form_field_participant_list_type_role'] = 'Papel';
$string['mod_form_field_participant_list_type_user'] = 'Usuário';
$string['mod_form_field_participant_list_type_owner'] = 'Proprietário';
$string['mod_form_field_participant_list_text_as'] = 'como';
$string['mod_form_field_participant_list_action_add'] = 'Adicionar';
$string['mod_form_field_participant_list_action_remove'] = 'Remover';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Moderador';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Participante';
$string['mod_form_field_participant_role_unknown'] = 'Desconhecido';
$string['mod_form_field_predefinedprofile'] = 'Perfil pré-definido';
$string['mod_form_field_predefinedprofile_help'] = 'Perfil pré-definido';
$string['mod_form_field_notification'] = 'Enviar notificação';
$string['mod_form_field_notification_help'] = 'Enviar uma notificação aos usuários inscritos avisando que esta atividade foi criada ou modificada';
$string['mod_form_field_notification_created_help'] = 'Mandar uma notificação aos usuários inscritos avisando que esta atividade foi criada';
$string['mod_form_field_notification_modified_help'] = 'Mandar uma notificação aos usuários inscritos avisando que esta atividade foi modificada';
$string['mod_form_field_notification_msg_created'] = 'criada';
$string['mod_form_field_notification_msg_modified'] = 'modificada';
$string['mod_form_field_notification_msg_at'] = 'em';


$string['modulename'] = 'Webconferência Elos';
$string['modulenameplural'] = 'Webconferência Elos';
$string['modulename_help'] = 'Webconferência Elos permite que você crie a partir do Moodle salas de webconferência para aulas online e em tempo real usando o Elos.

Usando a Webconferência Elos, você pode especificar título, descrição, período de utilização, grupos e detalhes sobre a gravação da sessão.

Para visualizar as gravações, adicione o recurso "Gravações Elos" neste curso.';
$string['modulename_link'] = 'BigBlueButtonBN/view';
$string['starts_at'] = 'Começa';
$string['started_at'] = 'Começou';
$string['ends_at'] = 'Termina';
$string['pluginadministration'] = 'Administração do Elos';
$string['pluginname'] = 'Webconferência Elos';
$string['serverhost'] = 'Nome do servidor';
$string['view_error_no_group_student'] = 'Você não está vinculado a um grupo. Por favor contate seu Professour ou o Suporte Pedagógico.';
$string['view_error_no_group_teacher'] = 'Nenhum grupo foi configurado ainda. Por favor defina grupos ou contate o Suporte Pedagógico.';
$string['view_error_no_group'] = 'Nenhum grupo foi configurado ainda. Por favor defina grupos antes de tentar participar da webconferência.';
$string['view_error_unable_join_student'] = 'Não foi possível conectar ao Elos. Por favor contate seu Professor ou o Suporte Pedagógico.';
$string['view_error_unable_join_teacher'] = 'Não foi possível conectar ao Elos. Por favor contate o Suporte Pedagógico.';
$string['view_error_unable_join'] = 'Não foi possível entrar na sala. Por favor, verifique a URL do servidor Elos e se o servidor está ativo.';
$string['view_error_bigbluebutton'] = 'Elos respondeu com erros. {$a}';
$string['view_error_create'] = 'O servidor Elos respondeu com uma mensagem de erro, a reunião não pode ser criada.';
$string['view_error_max_concurrent'] = 'O número máximo de sessões simultâneas foi alcançado.';
$string['view_error_userlimit_reached'] = 'Número máximo de participantes desta conferência foi alcançado.';
$string['view_error_url_missing_parameters'] = 'Parâmetros faltando na URL';
$string['view_error_import_no_courses'] = 'Nenhum curso para buscar gravações';
$string['view_error_import_no_recordings'] = 'Nenhuma gravação nesse curso para importar';
$string['view_groups_selection_join'] = 'Entrar';
$string['view_groups_selection'] = 'Selecione o grupo que você deseja participar e confirme';
$string['view_login_moderator'] = 'Entrando como moderador ...';
$string['view_login_viewer'] = 'Entrando como participante ...';
$string['view_noguests'] = 'A Webconferência Elos não está aberta para convidados.';
$string['view_nojoin'] = 'Você não possui privilégios para participar desta sessão.';
$string['view_recording_list_actionbar_delete'] = 'Apagar';
$string['view_recording_list_actionbar_deleting'] = 'Apagando';
$string['view_recording_list_actionbar_hide'] = 'Ocultar';
$string['view_recording_list_actionbar_show'] = 'Exibir';
$string['view_recording_list_actionbar_publish'] = 'Publicar';
$string['view_recording_list_actionbar_unpublish'] = 'Despublicar';
$string['view_recording_list_actionbar_publishing'] = 'Publicando';
$string['view_recording_list_actionbar_unpublishing'] = 'Despublicando';
$string['view_recording_list_actionbar_processing'] = 'Processando';
$string['view_recording_list_actionbar'] = 'Barra de ferramentas';
$string['view_recording_list_activity'] = 'Atividade';
$string['view_recording_list_course'] = 'Curso';
$string['view_recording_list_date'] = 'Data';
$string['view_recording_list_description'] = 'Descrição';
$string['view_recording_list_duration'] = 'Duração';
$string['view_recording_list_recording'] = 'Gravação';
$string['view_recording_button_import'] = 'Importar links de gravação';
$string['view_recording_button_return'] = 'Voltar';
$string['view_recording_format_presentation'] = 'Reproduzir';
$string['view_recording_format_video'] = 'Vídeo';
$string['view_recording_format_presentation_export'] = 'Download HTML';
$string['view_recording_format_presentation_video'] = 'Download Vídeo';
$string['view_section_title_presentation'] = 'Arquivo de apresentação';
$string['view_section_title_recordings'] = 'Gravações';
$string['view_message_norecordings'] = 'Nenhuma gravação disponível.';
$string['view_message_finished'] = 'Esta atividade encerrou.';
$string['view_message_notavailableyet'] = 'Esta sessão ainda não está disponível.';

$string['view_message_session_started_at'] = 'Esta sessão começou em';
$string['view_message_session_running_for'] = 'Esta sessão está ativa por';
$string['view_message_hour'] = 'hora';
$string['view_message_hours'] = 'horas';
$string['view_message_minute'] = 'minuto';
$string['view_message_minutes'] = 'minutos';
$string['view_message_moderator'] = 'moderador';
$string['view_message_moderators'] = 'moderadores';
$string['view_message_viewer'] = 'participante';
$string['view_message_viewers'] = 'participantes';
$string['view_message_user'] = 'usuário';
$string['view_message_users'] = 'usuários';
$string['view_message_has_joined'] = 'entrou';
$string['view_message_have_joined'] = 'entraram';
$string['view_message_session_no_users'] = 'Não há nenhum usuário nesta sessão';
$string['view_message_session_has_user'] = 'Existe';
$string['view_message_session_has_users'] = 'Existem';


$string['view_message_room_closed'] = 'Esta sala está fechada.';
$string['view_message_room_ready'] = 'Esta sala está pronta.';
$string['view_message_room_open'] = 'Esta sala está aberta.';
$string['view_message_conference_room_ready'] = 'Esta sala de conferência está pronta. Você pode entrar na sessão agora.';
$string['view_message_conference_not_started'] = 'Esta conferência ainda não começou.';
$string['view_message_conference_wait_for_moderator'] = 'Esperando pela entrada de um moderador.';
$string['view_message_conference_in_progress'] = 'Esta conferência está em andamento.';
$string['view_message_conference_has_ended'] = 'Esta conferência encerrou.';
$string['view_message_tab_close'] = 'Esta janela/aba deve ser fechada manualmente';


$string['view_groups_selection_warning'] = 'Existe uma sala de conferência para cada grupo. Se você tem acesso a mais de um, certifique-se de selecionar o correto.';
$string['view_conference_action_join'] = 'Entrar na sessão';
$string['view_conference_action_end'] = 'Encerrar sessão';


$string['view_recording'] = 'gravação';
$string['view_recording_link'] = 'link importado';
$string['view_recording_link_warning'] = 'Este link aponta para uma gravação criada em outro curso ou atividade';
$string['view_recording_delete_confirmation'] = 'Você tem certeza que deseja remover {$a}?';
$string['view_recording_delete_confirmation_warning_s'] = 'Esta gravação tem um link {$a} associado que foi importado por um outro curso ou atividade. Se a gravação for apagada, o link também será removido';
$string['view_recording_delete_confirmation_warning_p'] = 'Esta gravação tem links {$a} associados que foram importados por um outro curso ou atividade. Se a gravação for apagada, os links também serão removidos';
$string['view_recording_publish_link_error'] = 'Este link não pode ser republicado porque a gravação física não está publicada';
$string['view_recording_unpublish_confirmation'] = 'Você tem certeza que deseja despublicar {$a}?';
$string['view_recording_unpublish_confirmation_warning_s'] = 'Esta gravação tem um link {$a} associado que foi importado por um outro curso ou atividade. Se a gravação for despublicada, o link também será despublicado';
$string['view_recording_unpublish_confirmation_warning_p'] = 'Esta gravação tem links {$a} associados que foram importados por um outro curso ou atividade. Se a gravação for despublicada, os links também serão despublicados';
$string['view_recording_import_confirmation'] = 'Você tem cereteza que deseja importar esta gravação?';
$string['view_recording_actionbar'] = 'Barra de Ferramentas';
$string['view_recording_activity'] = 'Atividade';
$string['view_recording_course'] = 'Curso';
$string['view_recording_date'] = 'Data';
$string['view_recording_description'] = 'Descrição';
$string['view_recording_length'] = 'Comprimento';
$string['view_recording_duration'] = 'Duração';
$string['view_recording_recording'] = 'Gravação';
$string['view_recording_duration_min'] = 'min';
$string['view_recording_name'] = 'Nome';
$string['view_recording_tags'] = 'Tags';
$string['view_recording_modal_button'] = 'Aplicar';
$string['view_recording_modal_title'] = 'Atribuir valores à gravação';

$string['event_activity_created'] = 'Atividade Elos criada';
$string['event_activity_deleted'] = 'Atividade Elos deletada';
$string['event_activity_modified'] = 'Atividade Elos modificada';
$string['event_activity_viewed'] = 'Atividade Elos visualizada';
$string['event_activity_viewed_all'] = 'Gerenciamento de atividade Elos visualizado';
$string['event_meeting_created'] = 'Conferência Elos criada';
$string['event_meeting_ended'] = 'Conferência Elos terminada a força';
$string['event_meeting_joined'] = 'Entrou numa conferência Elos';
$string['event_meeting_left'] = 'Deixou uma conferência Elos';
$string['event_recording_deleted'] = 'Gravação deletada';
$string['event_recording_imported'] = 'Gravação importada';
$string['event_recording_published'] = 'Gravação publicada';
$string['event_recording_unpublished'] = 'Gravação despublicada';

$string['predefined_profile_default'] = 'Padrão';
$string['predefined_profile_classroom'] = 'Sala de aula';
$string['predefined_profile_conferenceroom'] = 'Sala de conferência';
$string['predefined_profile_collaborationroom'] = 'Sala de colaboração';
$string['predefined_profile_scheduledsession'] = 'Sessão programada';


$string['email_title_notification_has_been'] = 'foi';
$string['email_body_notification_meeting_has_been'] = 'foi';
$string['email_body_notification_meeting_details'] = 'Detalhes';
$string['email_body_notification_meeting_title'] = 'Título';
$string['email_body_notification_meeting_description'] = 'Descrição';
$string['email_body_notification_meeting_start_date'] = 'Data de início';
$string['email_body_notification_meeting_end_date'] = 'Data de fim';
$string['email_body_notification_meeting_by'] = 'por';
$string['email_body_recording_ready_for'] = 'Gravação de';
$string['email_body_recording_ready_is_ready'] = 'está pronta';
$string['email_footer_sent_by'] = 'Esta notificação automática foi enviada por';
$string['email_footer_sent_from'] = 'do curso';

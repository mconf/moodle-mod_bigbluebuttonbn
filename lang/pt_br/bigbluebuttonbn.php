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
 * Language File.
 *
 * @package   mod_bigbluebuttonbn
 * @author    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 * @author    Luciano Silva  (lucianoes [at] ufrgs [dt] br)
 * @author    Felipe Cecagno  (felipe [at] mconf [dt] com)
 */
defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Você tem sessões Elos a seguir';
$string['bbbduetimeoverstartingtime'] = 'O horário de encerramento desta atividade deve ser maior do que o horário de início';
$string['bbbdurationwarning'] = 'A duração máxima desta sessão é %duration% minutos.';
$string['bbbrecordwarning'] = 'Esta sessão pode ser gravada.';
$string['bbbrecordallfromstartwarning'] = 'Esta sessão está sendo gravada do início.';
$string['bigbluebuttonbn:addinstance'] = 'Adicionar uma nova webconferência';
$string['bigbluebuttonbn:join'] = 'Entrar em uma webconferência';
$string['bigbluebuttonbn:view'] = 'Visualizar uma sala/atividade';
$string['bigbluebuttonbn:managerecordings'] = 'Gerenciar gravações';
$string['bigbluebuttonbn:meeting'] = 'Cria webconferências';
$string['bigbluebuttonbn:recording'] = 'Cria gravações';
$string['bigbluebuttonbn'] = 'Elos';
$string['indicator:cognitivedepth'] = 'BigBlueButtonBN cognitive';
$string['indicator:cognitivedepth_help'] = 'This indicator is based on the cognitive depth reached by the student in a BigBlueButtonBN activity.';
$string['indicator:socialbreadth'] = 'BigBlueButtonBN social';
$string['indicator:socialbreadth_help'] = 'This indicator is based on the social breadth reached by the student in a BigBlueButtonBN activity.';
$string['modulename'] = 'Elos';
$string['modulenameplural'] = 'Elos';
$string['modulename_help'] = 'O módulo Elos para Moodle permite que você crie a partir do Moodle salas de webconferência para aulas online e em tempo real usando o Elos.

Usando o módulo Elos para Moodle você pode especificar título, descrição, período de utilização, grupos e detalhes sobre a gravação da sessão.';
$string['modulename_link'] = 'BigBlueButtonBN/view';
$string['pluginadministration'] = 'Administração do Elos';
$string['pluginname'] = 'Webconferência Elos';

$string['removedevents'] = 'Eventos apagados';
$string['removedtags'] = 'Tags apagadas';
$string['removedlogs'] = 'Tags personalizadas apagadas';
$string['removedrecordings'] = 'Gravações apagadas';
$string['resetevents'] = 'Apagar eventos';
$string['resettags'] = 'Apagar tags';
$string['resetlogs'] = 'Apagar tags personalizadas';
$string['resetrecordings'] = 'Apagar gravações';
$string['resetlogs_help'] = 'Apagar logs causará a desvinculação das gravações com as atividades';
$string['resetrecordings_help'] = 'Apagar gravações tornará elas inacessíveis e não pode ser desfeito';

$string['search:activity'] = 'BigBlueButtonBN - informação sobre atividade';
$string['search:tags'] = 'BigBlueButtonBN - informação sobre tags';

$string['privacy:metadata:bigbluebuttonbn'] = 'Stores the configuration for the room or activity that defines the features and general behaviour of the BigBlueButton session.';
$string['privacy:metadata:bigbluebuttonbn:participants'] = 'A list of rules that define the role users will in the live meeting. A user ID may be stored as permissions can be granted per role or user.';
$string['privacy:metadata:bigbluebuttonbn_logs'] = 'Stores events triggered when using the plugin.';
$string['privacy:metadata:bigbluebuttonbn_logs:userid'] = 'The user ID of the user who triggered the event.';
$string['privacy:metadata:bigbluebuttonbn_logs:timecreated'] = 'The time at which the log was created.';
$string['privacy:metadata:bigbluebuttonbn_logs:meetingid'] = 'The meeting ID the user had access to.';
$string['privacy:metadata:bigbluebuttonbn_logs:log'] = 'The type of event triggered by the user.';
$string['privacy:metadata:bigbluebuttonbn_logs:meta'] = 'May include extra information related to the meeting or the recording afected by the event.';
$string['privacy:metadata:bigbluebutton'] = 'In order to create and join BigBlueButton sessions, user data needs to be exchanged with the server.';
$string['privacy:metadata:bigbluebutton:userid'] = 'The userid of the user accessing the BigBlueButton server.';
$string['privacy:metadata:bigbluebutton:fullname'] = 'The fullname of the user accessing the BigBlueButton server.';

$string['config_general'] = 'Configurações gerais';
$string['config_general_description'] = 'Essas configurações estão <b>sempre</b> ativas';
$string['config_server_url'] = 'URL do servidor Elos';
$string['config_server_url_description'] = 'A URL de seu servidor Elos deve terminar com /bigbluebutton/. (Esta URL padrão é de um servidor BigBlueButton de testes da Blindside Networks.)';
$string['config_shared_secret'] = 'Chave de segurança';
$string['config_shared_secret_description'] = 'Chave de segurança do servidor Elos. (Esta chave padrão é de um servidor BigBlueButton de testes da Blindside Networks.)';

$string['config_recording'] = 'Configurações da funcionalidade "Gravação"';
$string['config_recording_description'] = 'Essas configurações são específicas para esta funcionalidade';
$string['config_recording_default'] = 'Gravação habilitada por padrão';
$string['config_recording_default_description'] = 'Quando habilitado, sessões criadas no Elos iniciarão gravando';
$string['config_recording_editable'] = 'Gravação pode ser modificada';
$string['config_recording_editable_description'] = 'Quando habilitado, o moderador optar por interromper e iniciar novamente a gravação.';
$string['config_recording_icons_enabled'] = 'Ícones para gerenciamento de gravações';
$string['config_recording_icons_enabled_description'] = 'Quando habilitado, o painel de gerenciamento de gravações mostra ícones para publicar/despublicar e deletar gravações.';
$string['config_recording_all_from_start_default'] = 'Gravar tudo desde o início';
$string['config_recording_all_from_start_default_description'] = 'If checked the meeting will record to start';
$string['config_recording_all_from_start_editable'] = 'Record all from start can be edited';
$string['config_recording_all_from_start_editable_description'] = 'If checked the interface includes an option for enable and disable the record all from start feature.';
$string['config_recording_hide_button_default'] = 'Hide recording button';
$string['config_recording_hide_button_default_description'] = 'If checked the button for record will be hide';
$string['config_recording_hide_button_editable'] = 'Hide recording button can be edited';
$string['config_recording_hide_button_editable_description'] = 'If checked the interface includes an option for enable and disable the hide recording button feature.';

$string['config_recordings'] = 'Configuration for "Show recordings" feature';
$string['config_recordings_description'] = 'These settings are feature specific';
$string['config_recordings_general'] = 'Show recording settings';
$string['config_recordings_general_description'] = 'These settings are used only when showing recordings';
$string['config_recordings_html_default'] = 'UI as html is enabled by default';
$string['config_recordings_html_default_description'] = 'If enabled the recording table is shown in plain HTML by default.';
$string['config_recordings_html_editable'] = 'UI as html feature can be edited';
$string['config_recordings_html_editable_description'] = 'UI as html value by default can be edited when the instance is added or updated.';
$string['config_recordings_deleted_default'] = 'Include recordings from deleted activities enabled by default';
$string['config_recordings_deleted_default_description'] = 'If enabled the recording table will include the recordings belonging to deleted activities if there is any.';
$string['config_recordings_deleted_editable'] = 'Include recordings from deleted activities feature can be edited';
$string['config_recordings_deleted_editable_description'] = 'Include recordings from deleted activities by default can be edited when the instance is added or updated.';
$string['config_recordings_imported_default'] = 'Show only imported links enabled by default';
$string['config_recordings_imported_default_description'] = 'If enabled the recording table will include only the imported links to recordings.';
$string['config_recordings_imported_editable'] = 'Show only imported links feature can be edited';
$string['config_recordings_imported_editable_description'] = 'Show only imported links by default can be edited when the instance is added or updated.';
$string['config_recordings_preview_default'] = 'Preview is enabled by default';
$string['config_recordings_preview_default_description'] = 'If enabled the table includes a preview of the presentation.';
$string['config_recordings_preview_editable'] = 'Preview feature can be edited';
$string['config_recordings_preview_editable_description'] = 'Preview feature can be edited when the instance is added or updated.';
$string['config_recordings_sortorder'] = 'Order the recordings in ascending order.';
$string['config_recordings_sortorder_description'] = 'By default recordings are displayed in descending order. When checked they will be sorted in ascending order.';
$string['config_recordings_validate_url'] = 'Validate URL';
$string['config_recordings_validate_url_description'] = 'If checked the playback URL will be validated before the user access it.';
$string['config_recordings_authenticated'] = 'Authenticate recordings';
$string['config_recordings_authenticated_description'] = 'If checked the authorization token will be retrieved from the recording server.';

$string['config_importrecordings'] = 'Configurações da funcionalidade "Importar gravações"';
$string['config_importrecordings_description'] = 'Essas configurações são específicas para esta funcionalidade';
$string['config_importrecordings_enabled'] = 'Importar gravações habilitado';
$string['config_importrecordings_enabled_description'] = 'Quando esta e a funcionalidade de gravação estiverem habilitadas, é possível importar gravações de outros cursos para dentro de uma atividade.';
$string['config_importrecordings_from_deleted_activities_enabled'] = 'Importar gravações de uma atividade apagada habilitado';
$string['config_importrecordings_from_deleted_activities_enabled_description'] = 'Quando esta e a funcionalidade de importar gravações estiverem habilitadas, é possível importar gravações de atividades que já não fazem mais parte do curso.';

$string['config_waitformoderator'] = 'Configurações da funcionalidade "Esperar pelo moderador"';
$string['config_waitformoderator_description'] = 'Essas configurações são específicas para esta funcionalidade';
$string['config_waitformoderator_default'] = 'Espera pelo moderador habilitada por padrão';
$string['config_waitformoderator_default_description'] = 'A funcionalidade de espera pelo moderador é habilitada por padrão quando uma nova sala ou conferência é adicionada.';
$string['config_waitformoderator_editable'] = 'Espera pelo moderador pode ser editada';
$string['config_waitformoderator_editable_description'] = 'A funcionalidade de espera pelo moderador por padrão pode ser editada quando uma sala ou conferência é criada ou atualizada.';
$string['config_waitformoderator_ping_interval'] = 'Ping de espera pelo moderador (segundos)';
$string['config_waitformoderator_ping_interval_description'] = 'Quando a funcionalidade de espera pelo moderador está habilitada, o cliente consulta o status da sessão a cada [numero] segundos. Este parâmetro define o intervalo entre requisições para o servidor Moodle';
$string['config_waitformoderator_cache_ttl'] = 'TTL de cache de espera pelo moderador (segundos)';
$string['config_waitformoderator_cache_ttl_description'] = 'Para suportar um maior número de clientes este plugin usa uma cache. Este parâmetro define o tempo em segundos que a cache será mantida até que a próxima requisição seja realizada ao servidor Elos.';

$string['config_voicebridge'] = 'Configurações da funcionalidade "Voice bridge"';
$string['config_voicebridge_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores padrão para essas opções.';
$string['config_voicebridge_editable'] = 'Voice Bridge da conferência pode ser editada';
$string['config_voicebridge_editable_description'] = 'O número de conferência Voice Bridge pode ser atribuído permanentemente a uma sala. Quando atribuído, o número não pode ser usado por nenhuma outra sala ou conferência';

$string['config_preuploadpresentation'] = 'Configurações da funcionalidade "Pré-carregamento de apresentação"';
$string['config_preuploadpresentation_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores padrão para essas opções.';
$string['config_preuploadpresentation_enabled'] = 'Pré-carregamento de apresentação habilitado';
$string['config_preuploadpresentation_enabled_description'] = 'Pré-carregamento de apresentação é habilitado na interface quando a sala ou conferência é adicionada ou atualizada.';

$string['config_presentation_default'] = 'Default file for "Pre-upload presentation" feature';
$string['config_presentation_default_description'] = 'This setting allow to select a file to use as default in all BBB instances if "Pre-upload presentation" is enabled.';

$string['config_participant'] = 'Participant configuration';
$string['config_participant_description'] = 'These settings define the role by default for participants in a conference.';
$string['config_participant_moderator_default'] = 'Moderator by default';
$string['config_participant_moderator_default_description'] = 'This rule is used by default when a new room is added.';

$string['config_userlimit'] = 'Configuração para "Limite de usuários"';
$string['config_userlimit_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores padrão para essas opções.';
$string['config_userlimit_default'] = 'Limite de usuários habilitado por padrão';
$string['config_userlimit_default_description'] = 'O número de usuário permitidos por padrão em uma sessão quando uma sala ou conferência é adicionada. Caso o número seja 0, nenhum limite é definido';
$string['config_userlimit_editable'] = 'Limite de usuários pode ser editado';
$string['config_userlimit_editable_description'] = 'Limite de usuários pode ser editado quando uma sala ou conferência é criada ou atualizada.';

$string['config_scheduled'] = 'Configurações para "Sessões programadas"';
$string['config_scheduled_description'] = 'Estas configurações definem o comportamento padrão de sessões programadas.';
$string['config_scheduled_duration_enabled'] = 'Calcular duração habilitado';
$string['config_scheduled_duration_enabled_description'] = 'A duração de uma sessão programada é calculada baseada no tempo de início e fim da sessão.';
$string['config_scheduled_duration_compensation'] = 'Tempo compensatório (minutos)';
$string['config_scheduled_duration_compensation_description'] = 'Minutos adicionados ao tempo de fim programado ao calcular a duração.';
$string['config_scheduled_pre_opening'] = 'Acessível antes do tempo de abertura (minutos)';
$string['config_scheduled_pre_opening_description'] = 'Tempo em minutos que a sessão é acessível antes do tempo programado para a início.';

$string['config_sendnotifications'] = 'Configurações da funcionalidade "Enviar notificações"';
$string['config_sendnotifications_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores padrão para essas opções.';
$string['config_sendnotifications_enabled'] = 'Enviar notificações habilitado';
$string['config_sendnotifications_enabled_description'] = 'Enviar notificações é habilitado na interface quando a sala ou conferência é adicionada ou atualizada.';

$string['config_extended_capabilities'] = 'Configurações para capacidades estendidas';
$string['config_extended_capabilities_description'] = 'Configurações para capacidades estendidas quando o servidor Elos as disponibiliza.';
$string['config_uidelegation_enabled'] = 'Delegação de UI habilitado';
$string['config_uidelegation_enabled_description'] = 'Essas configurações habilitam ou desabilitam a delegação de UI no servidor Elos.';
$string['config_recordingready_enabled'] = 'Notificações quando a gravação estiver pronta habilitado';
$string['config_recordingready_enabled_description'] = 'Notificações quando uma gravação estiver pronta está habilitada.';
$string['config_meetingevents_enabled'] = 'Register meeting events';
$string['config_meetingevents_enabled_description'] = 'Register meeting events feature is enabled.';

$string['config_warning_curl_not_installed'] = 'Esta funcionalidade requer a extensão CURL para PHP instalada e habilitada. As configurações serão acessíveis somente se esta condição for satisfeita.';
$string['config_warning_bigbluebuttonbn_cfg_deprecated'] = 'BigBlueButtonBN is making use of config.php with a global variable that has been deprecated. Please convert the file as it will not be supported in future versions';

$string['config_muteonstart'] = 'Configuration for "Mute on Start" feature';
$string['config_muteonstart_description'] = 'These settings enable or disable options in the UI and also define default values for these options.';
$string['config_muteonstart_default'] = 'Mute on start enabled by default';
$string['config_muteonstart_default_description'] = 'If enabled the session will be muted on start.';
$string['config_muteonstart_editable'] = 'Mute on start can be edited';
$string['config_muteonstart_editable_description'] = 'Mute on start by default can be edited when the instance is added or updated.';

$string['general_error_unable_connect'] = 'Não foi possível conectar. Por favor, verifique a URL do servidor Elos e se o servidor está ativo.';
$string['general_error_not_allowed_to_create_instances'] = 'User is not allowed to create any type of instances.';

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
$string['mod_form_block_room'] = 'Activity/Room settings';
$string['mod_form_block_recordings'] = 'Recording settings';
$string['mod_form_block_presentation'] = 'Conteúdo da apresentação';
$string['mod_form_block_presentation_default'] = 'Presentation default content';
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
$string['mod_form_field_instanceprofiles'] = 'Instance type';
$string['mod_form_field_instanceprofiles_help'] = 'Select the type for this BigBlueButtonBN instance.';
$string['mod_form_field_muteonstart'] = 'Mute on start';
$string['mod_form_field_notification'] = 'Enviar notificação';
$string['mod_form_field_notification_help'] = 'Enviar uma notificação aos usuários inscritos avisando que esta atividade foi criada ou modificada';
$string['mod_form_field_notification_created_help'] = 'Mandar uma notificação aos usuários inscritos avisando que esta atividade foi criada';
$string['mod_form_field_notification_modified_help'] = 'Mandar uma notificação aos usuários inscritos avisando que esta atividade foi modificada';
$string['mod_form_field_notification_msg_created'] = 'criada';
$string['mod_form_field_notification_msg_modified'] = 'modificada';
$string['mod_form_field_notification_msg_at'] = 'em';
$string['mod_form_field_recordings_html'] = 'Show the table in plain html';
$string['mod_form_field_recordings_deleted'] = 'Include recordings from deleted activities';
$string['mod_form_field_recordings_imported'] = 'Show only imported links';
$string['mod_form_field_recordings_preview'] = 'Show recording preview';
$string['mod_form_field_recordallfromstart'] = 'Record all from start';
$string['mod_form_field_recordhidebutton'] = 'Hide recording button';
$string['mod_form_field_nosettings'] = 'No settings can be edited';

$string['starts_at'] = 'Começa';
$string['started_at'] = 'Começou';
$string['ends_at'] = 'Termina';
$string['calendarstarts'] = '{$a} está programado para';
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
$string['view_error_invalid_session'] = 'A sessão expirou. Retorne para a página principal da atividade.';
$string['view_groups_selection_join'] = 'Entrar';
$string['view_groups_selection'] = 'Selecione o grupo que você deseja participar e confirme';
$string['view_login_moderator'] = 'Entrando como moderador ...';
$string['view_login_viewer'] = 'Entrando como participante ...';
$string['view_noguests'] = 'A Webconferência Elos não está aberta para convidados.';
$string['view_nojoin'] = 'Você não possui privilégios para participar desta sessão.';
$string['view_recording_list_actionbar_edit'] = 'Modificar';
$string['view_recording_list_actionbar_delete'] = 'Apagar';
$string['view_recording_list_actionbar_import'] = 'Importar';
$string['view_recording_list_actionbar_hide'] = 'Ocultar';
$string['view_recording_list_actionbar_show'] = 'Exibir';
$string['view_recording_list_actionbar_publish'] = 'Publicar';
$string['view_recording_list_actionbar_unpublish'] = 'Despublicar';
$string['view_recording_list_actionbar_protect'] = 'Tornar privado';
$string['view_recording_list_actionbar_unprotect'] = 'Tornar público';
$string['view_recording_list_action_publish'] = 'Publicando';
$string['view_recording_list_action_unpublish'] = 'Despublicando';
$string['view_recording_list_action_process'] = 'Processando';
$string['view_recording_list_action_delete'] = 'Apagando';
$string['view_recording_list_action_protect'] = 'Protegendo';
$string['view_recording_list_action_unprotect'] = 'Desprotegendo';
$string['view_recording_list_action_update'] = 'Atualizando';
$string['view_recording_list_action_edit'] = 'Atualizando';
$string['view_recording_list_action_play'] = 'Tocar';
$string['view_recording_list_actionbar'] = 'Barra de ferramentas';
$string['view_recording_list_activity'] = 'Atividade';
$string['view_recording_list_course'] = 'Curso';
$string['view_recording_list_date'] = 'Data';
$string['view_recording_list_description'] = 'Descrição';
$string['view_recording_list_duration'] = 'Duração';
$string['view_recording_list_recording'] = 'Gravação';
$string['view_recording_button_import'] = 'Importar links de gravação';
$string['view_recording_button_return'] = 'Voltar';
$string['view_recording_format_notes'] = 'Notas';
$string['view_recording_format_podcast'] = 'Podcast';
$string['view_recording_format_presentation'] = 'Reproduzir';
$string['view_recording_format_screenshare'] = 'Compartilhamento da tela';
$string['view_recording_format_statistics'] = 'Estatísticas';
$string['view_recording_format_video'] = 'Vídeo';
$string['view_recording_format_presentation_video'] = 'Vídeo';
$string['view_recording_format_errror_unreachable'] = 'A URL para este formato de gravação não é alcansável.';
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
$string['view_message_session_for'] = 'a sessão para';
$string['view_message_times'] = 'vezes';
$string['view_message_and'] = 'e';

$string['view_message_room_closed'] = 'Esta sala está fechada.';
$string['view_message_room_ready'] = 'Esta sala está pronta.';
$string['view_message_room_open'] = 'Esta sala está aberta.';
$string['view_message_conference_room_ready'] = 'Esta sala de conferência está pronta. Você pode entrar na sessão agora.';
$string['view_message_conference_not_started'] = 'Esta conferência ainda não começou.';
$string['view_message_conference_wait_for_moderator'] = 'Esperando pela entrada de um moderador.';
$string['view_message_conference_in_progress'] = 'Esta conferência está em andamento.';
$string['view_message_conference_has_ended'] = 'Esta conferência encerrou.';
$string['view_message_tab_close'] = 'Esta janela/aba deve ser fechada manualmente';
$string['view_message_recordings_disabled'] = 'Recordings were disabled on this server. BigBlueButtonBN instances for recordings only can not be used.';
$string['view_message_importrecordings_disabled'] = 'Feature for import recording links is disabled on this server.';

$string['view_groups_selection_warning'] = 'Existe uma sala de conferência para cada grupo. Se você tem acesso a mais de um, certifique-se de selecionar o correto.';
$string['view_groups_nogroups_warning'] = 'The room was configured for using groups but the course does not have goups defined.';
$string['view_groups_notenrolled_warning'] = 'The room was configured for using groups but you are not enrolled in any of them.';
$string['view_conference_action_join'] = 'Entrar na sessão';
$string['view_conference_action_end'] = 'Encerrar sessão';

$string['view_recording'] = 'gravação';
$string['view_recording_link'] = 'link importado';
$string['view_recording_link_warning'] = 'Este link aponta para uma gravação criada em outro curso ou atividade';
$string['view_recording_delete_confirmation'] = 'Você tem certeza que deseja remover {$a}?';
$string['view_recording_delete_confirmation_warning_s'] = 'Esta gravação tem um link {$a} associado que foi importado por um outro curso ou atividade. Se a gravação for apagada, o link também será removido';
$string['view_recording_delete_confirmation_warning_p'] = 'Esta gravação tem links {$a} associados que foram importados por um outro curso ou atividade. Se a gravação for apagada, os links também serão removidos';
$string['view_recording_publish_link_deleted'] = 'This link can not be re-published because the actual recording does not exist in the current BigBlueButton server. The link should be removed.';
$string['view_recording_publish_link_not_published'] = 'This link can not be re-published because the actual recording is unpublished';
$string['view_recording_unpublish_confirmation'] = 'Você tem certeza que deseja despublicar {$a}?';
$string['view_recording_unpublish_confirmation_warning_s'] = 'Esta gravação tem um link {$a} associado que foi importado por um outro curso ou atividade. Se a gravação for despublicada, o link também será despublicado';
$string['view_recording_unpublish_confirmation_warning_p'] = 'Esta gravação tem links {$a} associados que foram importados por um outro curso ou atividade. Se a gravação for despublicada, os links também serão despublicados';
$string['view_recording_import_confirmation'] = 'Você tem cereteza que deseja importar esta gravação?';
$string['view_recording_unprotect_link_deleted'] = 'This link can not be un-protected because the actual recording does not exist in the current BigBlueButton server. The link should be removed.';
$string['view_recording_unprotect_link_not_unprotected'] = 'This link can not be un-protected because the actual recording is protected';
$string['view_recording_actionbar'] = 'Barra de Ferramentas';
$string['view_recording_activity'] = 'Atividade';
$string['view_recording_course'] = 'Curso';
$string['view_recording_date'] = 'Data';
$string['view_recording_description'] = 'Descrição';
$string['view_recording_length'] = 'Duração';
$string['view_recording_meeting'] = 'Conferência';
$string['view_recording_duration'] = 'Duração';
$string['view_recording_recording'] = 'Gravação';
$string['view_recording_duration_min'] = 'min';
$string['view_recording_name'] = 'Nome';
$string['view_recording_tags'] = 'Tags';
$string['view_recording_playback'] = 'Playback';
$string['view_recording_preview'] = 'Preview';
$string['view_recording_preview_help'] = 'Hover over an image to view it in full size';
$string['view_recording_modal_button'] = 'Aplicar';
$string['view_recording_modal_title'] = 'Atribuir valores à gravação';
$string['view_recording_yui_first'] = 'Primeiro';
$string['view_recording_yui_prev'] = 'Anterior';
$string['view_recording_yui_next'] = 'Próximo';
$string['view_recording_yui_last'] = 'Último';
$string['view_recording_yui_page'] = 'Página';
$string['view_recording_yui_go'] = 'Ir';
$string['view_recording_yui_rows'] = 'Linhas';
$string['view_recording_yui_show_all'] = 'Mostrar tudo';

$string['event_activity_created'] = 'Atividade criada';
$string['event_activity_viewed'] = 'Atividade visualizada';
$string['event_activity_deleted'] = 'Atividade apagada';
$string['event_activity_updated'] = 'Atividade atualizada';
$string['event_meeting_created'] = 'Conferência criada';
$string['event_meeting_ended'] = 'Conferência terminada a força';
$string['event_meeting_joined'] = 'Entrou numa conferência';
$string['event_meeting_left'] = 'Deixou uma conferência';
$string['event_recording_viewed'] = 'Gravação visualizada';
$string['event_recording_edited'] = 'Gravação modificada';
$string['event_recording_deleted'] = 'Gravação deletada';
$string['event_recording_imported'] = 'Gravação importada';
$string['event_recording_published'] = 'Gravação publicada';
$string['event_recording_unpublished'] = 'Gravação despublicada';
$string['event_recording_protected'] = 'Gravação protegida';
$string['event_recording_unprotected'] = 'Gravação desprotegida';
$string['event_live_session'] = 'Evento de sessão ao vivo';

$string['instance_type_default'] = 'Sala/Atividade com gravações';
$string['instance_type_room_only'] = 'Apenas sala/atividade';
$string['instance_type_recording_only'] = 'Apenas gravações';

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

$string['view_error_meeting_not_running'] = 'Something went wrong, the meeting is not running.';
$string['view_error_current_state_not_found'] = 'Current state was not found. The recording may have been deleted or the BigBlueButton server is not compatible with the action performed.';
$string['view_error_action_not_completed'] = 'Action could not be completed';
$string['view_warning_default_server'] = 'This Moodle server is making use of the BigBlueButton testing server that comes pre-configured by default. It should be replaced for production.';

$string['view_room'] = 'View room';
$string['mod_form_block_clienttype'] = 'Web Client Technology';
$string['mod_form_block_clienttype_flash'] = 'Client based on Adobe Flash technology';
$string['mod_form_block_clienttype_html5'] = 'Client based on HTML5 technology';
$string['mod_form_field_block_clienttype'] = 'Web Client Technology';
$string['config_clienttype'] = 'Configuration for "Web Client" type';
$string['config_clienttype_default'] = 'Default Web Client type';
$string['config_clienttype_default_description'] = 'Choose between the classical Adobe Flash client or the new HTML5 one.';
$string['config_clienttype_description'] = 'This setting enable/disable the Web Client choice for each room.';
$string['config_clienttype_editable'] = 'The Web Client choice can be edited';
$string['config_clienttype_editable_description'] = 'This option enable the choice of the Web Client (AdobeFlash/HTML5) from the room editing form.';
$string['index_error_noinstances'] = 'There are no instances of bigbluebuttonbn';
$string['index_error_bbtn'] = 'BigBlueButton ID {$a} is incorrect';

$string['view_mobile_message_reload_page_creation_time_meeting'] = 'You exceeded the 45 seconds in this page, please reload the page to join correctly to the meeting.';
$string['view_mobile_message_groups_not_supported'] = 'This instance is enable to work with groups but the mobile app has not support for this. Please open in desktop if you want to use the group support.';

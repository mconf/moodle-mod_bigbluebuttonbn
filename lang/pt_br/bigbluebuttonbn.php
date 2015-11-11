<?php
/**
 * Language File
 *
 * Authors:
 *    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 *    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 *    Luciano Silva  (lucianoes [at] ufrgs [dt] br)
 *    Felipe Cecagno  (felipe [at] mconf [dt] org)
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010-2012 Blindside Networks
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */
defined('MOODLE_INTERNAL') || die();

$string['bbbduetimeoverstartingtime'] = 'O horário de encerramento desta atividade deve ser maior do que o horário de início';
$string['bbbdurationwarning'] = 'A duração máxima para esta sessão é %duration% minutos.';
$string['bbbrecordwarning'] = 'Esta sessão está sendo gravada.';
$string['bigbluebuttonbn:join'] = 'Participar de uma webconferência';
$string['bigbluebuttonbn:moderate'] = 'Moderar uma webconferência';
$string['bigbluebuttonbn:managerecordings'] = 'Gerenciar gravações';
$string['bigbluebuttonbn:addinstance'] = 'Adicionar uma nova webconferência';
$string['bigbluebuttonbn'] = 'Mconf Webconferência';
$string['bigbluebuttonbnfieldset'] = 'Exemplo de campo personalizado';
$string['bigbluebuttonbnintro'] = 'Introdução ao Mconf';
$string['config_general'] = 'Configurações gerais';

$string['config_general_description'] = 'Essas configurações estão <b>sempre</b> ativas';
$string['config_server_url'] = 'URL do servidor Mconf';
$string['config_server_url_description'] = 'A URL de seu servidor Mconf deve terminar com /bigbluebutton/. (Esta URL padrão é de um servidor BigBlueButton de testes da Blindside Networks.)';
$string['config_shared_secret'] = 'Chave de segurança';
$string['config_shared_secret_description'] = 'Chave de segurança do servidor Mconf. (Esta chave padrão é de um servidor BigBlueButton de testes da Blindside Networks.)';
$string['config_detect_mobile'] = 'Detectar Acceso de Clientes Móveis';
$string['config_detect_mobile_description'] = 'Tentar detectar se a conferência está sendo acessada por um dispositivo móvel e redirecionar para o cliente móvel.';

$string['config_feature_recording'] = 'Configurações de "Gravação"';
$string['config_feature_recording_description'] = 'Essas configurações são específicas ao módulo de gravações';
$string['config_feature_recording_default'] = 'Gravação habilitada por padrão';
$string['config_feature_recording_default_description'] = 'Quando habilitado conferências Mconf terão capacidades de gravação';
$string['config_feature_recording_editable'] = 'Opção de gravação pode ser editada';
$string['config_feature_recording_editable_description'] = 'Quando habilitado a interface inclui uma opção para habilitar ou desabilitar as capacidades de gravação.';
$string['config_feature_recording_icons_enabled'] = 'Ícones para gerenciamento de gravações';
$string['config_feature_recording_icons_enabled_description'] = 'Quando habilitado o painel de gerenciamento de gravações mostra ícones para publicar/despublicar e deletar gravações.';


$string['config_feature_recordingtagging'] = 'Configurações de "Tagueamento de Gravações"';
$string['config_feature_recordingtagging_description'] = 'Estas configurações são específicas para este módulo';
$string['config_feature_recordingtagging_default'] = 'Tagueamento de gravações habilitado por padrão';
$string['config_feature_recordingtagging_default_description'] = 'Tagueamento de Gravações é habilitado por padrão quando uma nova sala ou conferência é criada.<br> Quando este módulo esta habilitado uma página intermediária que permite a entrada de uma descrição e tags é mostrada ao primeiro moderador participando da conferência. Estes dados são usados posteriormente para identificar a gravação na lista.';
$string['config_feature_recordingtagging_editable'] = 'Opção de tagueamento de gravações pode ser editada';
$string['config_feature_recordingtagging_editable_description'] = 'O tagueamento de gravações por padrão pode ser editado quando uma sala ou conferência é criada ou atualizada.';


$string['config_feature_waitformoderator'] = 'Configurações de "Esperar pelo Moderador"';
$string['config_feature_waitformoderator_description'] = 'Estas configurações são específicas para este módulo';
$string['config_feature_waitformoderator_default'] = 'Espera pelo moderador habilitada por padrão';
$string['config_feature_waitformoderator_default_description'] = 'A opção de Espera pelo moderador é habilitada por padrão quando uma nova sala ou conferência é adicionada.';
$string['config_feature_waitformoderator_editable'] = 'Espera pelo moderador pode ser editada';
$string['config_feature_waitformoderator_editable_description'] = 'A Espera pelo moderador por padrão pode ser editada quando uma sala ou conferência é criada ou atualizada.';
$string['config_feature_waitformoderator_ping_interval'] = 'Ping de Espera pelo Moderador (segundos)';
$string['config_feature_waitformoderator_ping_interval_description'] = 'Quando a Espera pelo Moderador esta habilitada, o cliente consulta o status da sessão a cada [numero] segundos.';
$string['config_feature_waitformoderator_cache_ttl'] = 'TTL de Cache de Espera pelo Moderador (segundos)';
$string['config_feature_waitformoderator_cache_ttl_description'] = 'Para suportar um maior número de clientes este plugin usa uma cache. Este parâmetro define o tempo em segundos que a cache será mantida antes que a próxima requisição seja feita ao servidor Mconf.';


$string['config_feature_voicebridge'] = 'Configurações de "Voice bridge"';
$string['config_feature_voicebridge_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores para essas opções.';
$string['config_feature_voicebridge_editable'] = 'Voice Bridge da conferência pode ser editado';
$string['config_feature_voicebridge_editable_description'] = 'O número de conferência Voice Bridge pode ser atribuído permanentemente a uma sala. Quando atribuído, o número não pode ser usado por nenhuma outra sala ou conferência.';


$string['config_feature_preuploadpresentation'] = 'Configurações para "Pré-carregamento de apresentação"';
$string['config_feature_preuploadpresentation_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores para essas opções.';
$string['config_feature_preuploadpresentation_enabled'] = 'Pré-carregamento de apresentação habilitado';
$string['config_feature_preuploadpresentation_enabled_description'] = 'Pré-carregamento de apresentação é habilitado na interface quando a sala ou conferência é adicionada ou atualizada.';


$string['config_permission'] = 'Configuração de Permissões';
$string['config_permission_description'] = 'Estas configurações definem as permissões padrão para salas ou conferências criadas.';
$string['config_permission_moderator_default'] = 'Moderador por padrão';
$string['config_permission_moderator_default_description'] = 'Esta regra é usada por padrão quando uma nova sala ou conferência é adicionada.';


$string['config_feature_predefinedprofile'] = 'Configuração de Perfil pré-definido';
$string['config_feature_predefinedprofile_description'] = 'Estas configurações criam os perfis pré-definidos usados para simplificar a interface de configuração das atividades Mconf.';
$string['config_feature_predefinedprofile_enabled'] = 'Perfil pré-definido habilitado';
$string['config_feature_predefinedprofile_enabled_description'] = 'Perfil pré-definido é habilitado na interface quando uma sala ou conferência é adicionada.';


$string['config_feature_userlimit'] = 'Configuração para "Limite de Usuários"';
$string['config_feature_userlimit_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores para essas opções.';
$string['config_feature_userlimit_default'] = 'Limite de usuários habilitado por padrão';
$string['config_feature_userlimit_default_description'] = 'O número de usuário permitidos por padrão em uma sessão quando quando uma sala ou conferência é adicionada. Caso o número seja 0, não há limite.';
$string['config_feature_userlimit_editable'] = 'Limite de usuários pode ser editado';
$string['config_feature_userlimit_editable_description'] = 'Limite de usuários pode ser editado quando uma sala ou conferência é criada ou atualizada.';


$string['config_scheduled'] = 'Configurações para "Sessões programadas"';
$string['config_scheduled_description'] = 'Estas configurações definem o comportamento padrão de sessões programadas.';
$string['config_scheduled_duration_enabled'] = 'Cálculo de duração habilitado';
$string['config_scheduled_duration_enabled_description'] = 'A duração de uma sessão programada é baseada no tempo de abertura e fechamento.';
$string['config_scheduled_duration_compensation'] = 'Tempo compensatório (minutos)';
$string['config_scheduled_duration_compensation_description'] = 'Minutos adicionados ao tempo de fechamento programado ao se calcular a duração.';
$string['config_scheduled_pre_opening'] = 'Acessível antes do tempo de abertura (minutos)';
$string['config_scheduled_pre_opening_description'] = 'Tempo em minutos que a sessão é acessível antes do tempo programado para a abertura.';


$string['config_feature_sendnotifications'] = 'Configurações para "Mandar Notificações"';
$string['config_feature_sendnotifications_description'] = 'Essas opções habilitam ou desabilitam opções na interface e definem valores para essas opções.';
$string['config_feature_sendnotifications_enabled'] = 'Mandar Notificações habilitado';
$string['config_feature_sendnotifications_enabled_description'] = 'Mandar Notificações é habilitado na interface quando a sala ou conferência é adicionada ou atualizada.';


$string['config_extended_capabilities'] = 'Configurações para capacidades estendidas';
$string['config_extended_capabilities_description'] = 'Configurações para capacidades estendidas se o servidor Mconf as oferece.';
$string['config_extended_feature_uidelegation_enabled'] = 'Delegação de UI habilitada';
$string['config_extended_feature_uidelegation_enabled_description'] = 'Essas opções habilitam ou desabilitam a delegação de UI no servidor Mconf.';


$string['general_error_unable_connect'] = 'Não foi possível conectar. Por favor, verifique a URL do servidor Mconf e se o servidor está ativo.';

$string['index_confirm_end'] = 'Você gostaria de encerrar a webconferência?';
$string['index_disabled'] = 'desabilitado';
$string['index_enabled'] = 'habilitado';
$string['index_ending'] = 'Encerrando a webconferência ... por favor aguarde';
$string['index_error_checksum'] = 'Ocorreu um erro de checksum. Verifique se a chave de segurança do servidor está correta.';
$string['index_error_forciblyended'] = 'Não é possível entrar na webconferência pois ela foi encerrada manualmente.';
$string['index_error_unable_display'] = 'Não é possível exibir as webconferências. Por favor verifique a URL do servidor Mconf e se o servidor está ativo.';
$string['index_heading_actions'] = 'Ações';
$string['index_heading_group'] = 'Grupo';
$string['index_heading_moderator'] = 'Moderadores';
$string['index_heading_name'] = 'Sala';
$string['index_heading_recording'] = 'Gravação';
$string['index_heading_users'] = 'Usuários';
$string['index_heading_viewer'] = 'Participantes';
$string['index_heading'] = 'Salas Mconf';
$string['mod_form_block_general'] = 'Configurações gerais';
$string['mod_form_block_presentation'] = 'Conteúdo da Apresentação';
$string['mod_form_block_participants'] = 'Participantes';
$string['mod_form_block_schedule'] = 'Agendamento de sessões';
$string['mod_form_block_record'] = 'Configurações de gravação';
$string['mod_form_field_openingtime'] = 'Participação liberada';
$string['mod_form_field_closingtime'] = 'Participação encerrada';
$string['mod_form_field_description'] = 'Descrição da sessão a ser gravada';
$string['mod_form_field_description_help'] = "Uma descrição curta da gravação que será mostrada na lista de gravações. Pode ser diferente para cada sessão.";
$string['mod_form_field_intro'] = 'Descrição';
$string['mod_form_field_intro_help'] = 'Uma descrição curta da sala ou conferência';
$string['mod_form_field_duration_help'] = 'A duração máxima define o período de tempo que a sala irá permanecer aberta desde a entrada do primeiro usuário. IMPORTANTE: utilize com cuidado, pois quando a duração máxima é atingida, a sala é fecahda automaticamente e todos os participantes são desconectados. Utilize o valor 0 para não definir duração máxima.';
$string['mod_form_field_duration'] = 'Duração';
$string['mod_form_field_userlimit'] = 'Limitar usuários';
$string['mod_form_field_userlimit_help'] = 'Número máximo de usuários permitidos em uma webconferência';
$string['mod_form_field_name'] = 'Nome da sala de aula virtual';
$string['mod_form_field_room_name'] = 'Nome da sala de webconferência';
$string['mod_form_field_conference_name'] = 'Nome da conferência';
$string['mod_form_field_newwindow'] = 'Abrir Mconf em uma nova janela';
$string['mod_form_field_record'] = 'Gravar';
$string['mod_form_field_voicebridge'] = 'Número da conferência de voz';
$string['mod_form_field_voicebridge_help'] = 'Número da conferência de voz que os participantes podem utilizar para se conectar via SIP.';
$string['mod_form_field_voicebridge_format_error'] = 'Formato inválido. Deve ser um número entre 1 e 9999.';
$string['mod_form_field_voicebridge_notunique_error'] = 'O valor não é unico. Este número já está sendo usado por outra sala ou conferência.';
$string['mod_form_field_recordingtagging'] = 'Ativar taguamento de gravações';
$string['mod_form_field_wait'] = 'Esperar pelo moderador';
$string['mod_form_field_wait_help'] = 'Os alunos devem aguardar a entrada de um moderador';
$string['mod_form_field_welcome'] = 'Mensagem de boas-vindas';
$string['mod_form_field_welcome_help'] = 'Substitua a mensagem padrão configurada para o Mconf. A mensagem pode incluir palavras chave (%%CONFNAME%%, %%DIALNUM%%, %%CONFNUM%%) que serão substituídas automaticamente, e também tags HTML como &lt;b&gt;...&lt;/b&gt; ou &lt;i&gt;...&lt;/i&gt;';
$string['mod_form_field_welcome_default'] = '<br>Seja bem-vindo à sala <b>%%CONFNAME%%</b>!<br><br>Para habilitar seu microfone, clique no ícone do headset (canto superior esquerdo). <b>Por favor, utilize um headset para não causar ruído para os demais participantes. Para uma melhor experiência, utilize rede cabeada sempre que possível.</b>';
$string['mod_form_field_participant_add'] = 'Adicionar participante';
$string['mod_form_field_participant_list'] = 'Lista de participantes';
$string['mod_form_field_participant_list_type_all'] = 'Todos usuários inscritos';
$string['mod_form_field_participant_list_type_role'] = 'Função';
$string['mod_form_field_participant_list_type_user'] = 'Usuário';
$string['mod_form_field_participant_list_type_owner'] = 'Proprietário';
$string['mod_form_field_participant_list_text_as'] = 'como';
$string['mod_form_field_participant_list_action_add'] = 'Adicionar';
$string['mod_form_field_participant_list_action_remove'] = 'Remover';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Moderador';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Visualizador';
$string['mod_form_field_predefinedprofile'] = 'Perfil pré-definido';
$string['mod_form_field_predefinedprofile_help'] = 'Perfil pré-definido';
$string['mod_form_field_notification'] = 'Mandar notificação';
$string['mod_form_field_notification_help'] = 'Mandar uma notificação aos usuários inscritos avisando que esta atividade foi criada ou modificada';
$string['mod_form_field_notification_created_help'] = 'Mandar uma notificação aos usuários inscritos avisando que esta atividade foi criada';
$string['mod_form_field_notification_modified_help'] = 'Mandar uma notificação aos usuários inscritos avisando que esta atividade foi modificada';
$string['mod_form_field_notification_msg_created'] = 'criada';
$string['mod_form_field_notification_msg_modified'] = 'modificada';


$string['modulename'] = 'Webconferência Mconf';
$string['modulenameplural'] = 'Webconferência Mconf';
$string['modulename_help'] = 'Webconferência Mconf permite que você crie a partir do Moodle salas de webconferência e especifique título, descrição, período de utilização, grupos e detalhes sobre a gravação da sessão.

IMPORTANTE: Para visualizar as gravações posteriormente adicione o recurso "Gravações Mconf" neste curso.';

$string['modulename_link'] = 'BigBlueButtonBN/view';
$string['pluginadministration'] = 'Administração do Mconf';
$string['pluginname'] = 'Webconferência Mconf';
$string['serverhost'] = 'Nome do servidor';
$string['view_error_no_group_student'] = 'Você não está vinculado a um grupo. Por favor contate seu Professour ou o Suporte Pedagógico.';
$string['view_error_no_group_teacher'] = 'Nenhum grupo foi configurado ainda. Por favor defina grupos ou contate o Suporte Pedagógico.';
$string['view_error_no_group'] = 'Nenhum grupo foi configurado ainda. Por favor defina grupos antes de tentar participar da webconferência.';
$string['view_error_unable_join_student'] = 'Não foi possível contectar-se ao Mconf. Por favor contate seu Professor ou o Suporte Pedagógico.';
$string['view_error_unable_join_teacher'] = 'Não foi possível contectar-se ao Mconf. Por favor contate o Suporte Pedagógico.';
$string['view_error_unable_join'] = 'Não foi possível entrar na sala. Por favor, verifique a URL do servidor Mconf e se o servidor está ativo.';
$string['view_error_create'] = 'O servidor Mconf respondeu com uma mensagem de erro, a reunião não pode ser criada.';
$string['view_error_max_concurrent'] = 'O número máximo de sessões simultâneas foi alcançado.';
$string['view_error_userlimit_reached'] = 'Número máximo de participantes desta conferência foi alcançado.';
$string['view_groups_selection_join'] = 'Entrar';
$string['view_groups_selection'] = 'Selecione o grupo que você deseja participar e confirme';
$string['view_login_moderator'] = 'Entrando como moderador ...';
$string['view_login_viewer'] = 'Entrando como participante ...';
$string['view_noguests'] = 'A Webconferência Mconf não está aberta para convidados.';
$string['view_nojoin'] = 'Você não possui privilégios para participar desta sessão.';
$string['view_recording_list_actionbar_delete'] = 'Excluir';
$string['view_recording_list_actionbar_deleting'] = 'Deletando';
$string['view_recording_list_actionbar_hide'] = 'Ocultar';
$string['view_recording_list_actionbar_show'] = 'Exibir';
$string['view_recording_list_actionbar_publish'] = 'Publicar';
$string['view_recording_list_actionbar_unpublish'] = 'Despublicar';
$string['view_recording_list_actionbar_publishing'] = 'Publicando';
$string['view_recording_list_actionbar_unpublishing'] = 'Despublicando';
$string['view_recording_list_actionbar_processing'] = 'Processando';
$string['view_recording_list_actionbar'] = 'Ferramentas';
$string['view_recording_list_activity'] = 'Atividade';
$string['view_recording_list_course'] = 'Curso';
$string['view_recording_list_date'] = 'Data';
$string['view_recording_list_description'] = 'Descrição';
$string['view_recording_list_duration'] = 'Duração';
$string['view_recording_list_recording'] = 'Gravação';
$string['view_wait'] = 'A webconferência ainda não começou. Aguardando o moderador ...';
$string['view_section_title_presentation'] = 'Arquivo de apresentação';
$string['view_section_title_recordings'] = 'Gravações';
$string['view_message_norecordings'] = 'Nenhuma gravação disponível, por favor, retorne mais tarde.';
$string['view_message_finished'] = 'Esta atividade encerrou.';
$string['view_message_notavailableyet'] = 'Desculpe, esta sessão ainda não está disponível.';

$string['view_message_session_started_at'] = 'Esta sessão começou em ';
$string['view_message_session_running_for'] = 'Esta sessão esteve ativa por ';
$string['view_message_hour'] = 'hora';
$string['view_message_hours'] = 'horas';
$string['view_message_minute'] = 'minuto';
$string['view_message_minutes'] = 'minutos';
$string['view_message_moderator'] = 'moderador';
$string['view_message_moderators'] = 'moderadores';
$string['view_message_viewer'] = 'expectador';
$string['view_message_viewers'] = 'expectadores';
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
$string['view_message_conference_wait_for_moderator'] = 'Esprando pela entrada de um moderador.';
$string['view_message_conference_in_progress'] = 'Esta conferência está em progresso.';
$string['view_message_conference_has_ended'] = 'Esta conferência já acabou.';
$string['view_message_tab_close'] = 'Esta janela/aba deve ser fechada manualmente';


$string['view_groups_selection_warning'] = 'Existe uma sala de conferência para grupo e você tem acesso a mais de um. Certifique-se de selecionar a correta.';
//$string['view_groups_selection_message'] = 'Select the group you want to participate.';
//$string['view_groups_selection_button'] = 'Select';
$string['view_conference_action_join'] = 'Entrar na sessão';
$string['view_conference_action_end'] = 'Terminar sessão';
$string['view_conference_action_lineup'] = 'Entrar na fila para entrar na sessão';


$string['view_recording_delete_confirmation'] = 'Tem certeza que quer deletar esta gravação?';
$string['view_recording_actionbar'] = 'Barra de Ferramentas';
$string['view_recording_activity'] = 'Atividade';
$string['view_recording_course'] = 'Curso';
$string['view_recording_date'] = 'Data';
$string['view_recording_description'] = 'Descrição';
$string['view_recording_length'] = 'Comprimento';
$string['view_recording_duration'] = 'Duração';
$string['view_recording_recording'] = 'Gravação';
// $string['view_recording_duration_min'] = 'min';
$string['view_recording_name'] = 'Nome';
$string['view_recording_tags'] = 'Tags';
$string['view_recording_modal_button'] = 'Aplicar';
$string['view_recording_modal_title'] = 'Atribuir valores à gravação';

$string['event_activity_created'] = 'Atividade Mconf criada';
$string['event_activity_viewed'] = 'Atividade Mconf visualizada';
$string['event_activity_viewed_all'] = 'Gerenciamento de atividade Mconf visualizado';
$string['event_activity_modified'] = 'Atividade Mconf modificada';
$string['event_activity_deleted'] = 'Atividade Mconf deletada';
$string['event_meeting_created'] = 'Conferência Mconf criada';
$string['event_meeting_joined'] = 'Entrou numa conferência Mconf';
$string['event_meeting_left'] = 'Deixou uma conferência Mconf';
$string['event_meeting_ended'] = 'Conferência Mconf terminada a força';
$string['event_recording_published'] = 'Gravação publicada';
$string['event_recording_unpublished'] = 'Gravação despublicada';
$string['event_recording_deleted'] = 'Gravação deletada';

$string['predefined_profile_default'] = 'Padrão';
$string['predefined_profile_classroom'] = 'Sala de Aula';
$string['predefined_profile_conferenceroom'] = 'Sala de Conferência';
$string['predefined_profile_collaborationroom'] = 'Sala de Colaboração';
$string['predefined_profile_scheduledsession'] = 'Sessão Programada';


$string['email_title_notification_has_been'] = 'foi';
$string['email_body_notification_meeting_has_been'] = 'foi';
$string['email_body_notification_meeting_details'] = 'Detalhes';
$string['email_body_notification_meeting_title'] = 'Título';
$string['email_body_notification_meeting_description'] = 'Descrição';
$string['email_body_notification_meeting_start_date'] = 'Start date';
$string['email_body_notification_meeting_end_date'] = 'End date';
$string['email_body_notification_meeting_by'] = 'by';
$string['email_body_recording_ready_for'] = 'Recording for';
$string['email_body_recording_ready_is_ready'] = 'is ready';
$string['email_footer_sent_by'] = 'This automatic notification message was sent by';
$string['email_footer_sent_from'] = 'from the course';

<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr8
 *
 *  License: MIT
 *
 *  Polish Language - Installation
 */

$language = array(
    /*
     *  Installation
     */
    'install' => 'Zainstaluj',
    'pre-release' => 'pre-release',
    'installer_welcome' => 'Witamy w wersji NamelessMc 2.0 pre-release.',
    'pre-release_warning' => 'Pamiętaj, że wersja pre-release nie jest przeznaczona do użytku publicznego.',
    'installer_information' => 'Instalator przeprowadzi Cię przez proces instalacji.',
    'new_installation_question' => 'Po pierwsze, czy jest to nowa instalacja?',
    'new_installation' => 'Nowa instalacja &raquo;',
    'upgrading_from_v1' => 'Aktualizacja z v1 &raquo;',
    'requirements' => 'Wymagania:',
    'config_writable' => 'Zapistywalność pliku core/config.php',
    'cache_writable' => 'Pamięć podręczna do zapisu',
    'template_cache_writable' => 'Szablon do zapisu w pamięci podręcznej',
    'exif_imagetype_banners_disabled' => 'Bez funkcji exif_imagetype bannery serwerowe nie będą dostępne.',
    'requirements_error' => 'By kontynuować instalację musisz mieć zainstalowane wszystkie wymagane rozszerzenia.',
    'proceed' => 'Kontynuuj',
    'database_configuration' => 'Konfiguracja bazy danych',
    'database_address' => 'Adres bazy danych',
    'database_port' => 'Port bazy danych',
    'database_username' => 'Nazwa użytkownika bazy danych',
    'database_password' => 'Hasło do bazy danych',
    'database_name' => 'Nazwa bazy danych',
    'nameless_path' => 'Ścieżka instalacji',
    'nameless_path_info' => 'Wpisz tutaj ścieżkę do folderu w którym jest zainstalowany Nameless. Na przykład, jeśli Nameless jest zainstalowany w przyklad.pl/forum, musisz wpisać tu <strong>forum</strong>. Pozostaw to pole puste jeśli Nameless nie jest zainstalowany w subfolderze.',
    'friendly_urls' => 'Przyjazne adresy URL',
    'friendly_urls_info' => 'Funkcja przyjazne adresy URL poprawia ich czytelność w przeglądarce.<br />Na przykład: <br />przyklad.pl/index.php?route=/forum<br />zostanie zamienione na<br />przyklad.pl/forum.<br /><strong>Uwaga!</strong><br />Twój serwer musi być odpowiednio skonfigurowany aby ta funkcja działała. Możesz sprawdzić czy możesz włączyć tę opcję klikając <a href=\'./rewrite_test\' target=\'_blank\'>tutaj</a>.',
    'enabled' => 'Włączone',
    'disabled' => 'Wyłączone',
    'character_set' => 'Zestaw znaków',
    'database_engine' => 'Silnik plików bazy danych',
    'host' => 'Nazwa hosta',
    'host_help' => 'Nazwa hosta jest <strong>bazowym URL</strong> twojej strony. Nie dodawaj tutaj subfolderów z pola Ścieżka instalacji ani http(s)://!',
    'database_error' => 'Upewnij się że wypełniłeś wyszystkie pola.',
    'submit' => 'Zatwierdź',
    'installer_now_initialising_database' => 'Instalator tworzy bazę danych. Może to chwilę zająć...',
    'configuration' => 'Konfiguracja',
    'configuration_info' => 'Wprowadź podstawowe informacje o swojej witrynie. Będą one mogły zostać później zmienione w panelu administratora.',
    'configuration_error' => 'Wpisz nazwę strony mającą od 1 do 32 znaków, i twój adres email mający od 4 do 64 znaków długości.',
    'site_name' => 'Nazwa strony',
    'contact_email' => 'Email kontaktowy',
    'outgoing_email' => 'Email do wysyłania wiadomości do użytkowników',
    'initialising_database_and_cache' => 'Inicjowanie bazy danych i pamięci podręcznej, proszę czekać...',
    'unable_to_login' => 'Podczas logowania wystąpi błąd.',
    'unable_to_create_account' => 'Podczas tworzenia konta wystąpił błąd.',
    'input_required' => 'Wpisz poprawną nazwę użytkownika, email i hasło.',
    'input_minimum' => 'Upewnij się, że twoja nazwa użytkownika ma co najmniej 3 znaki, twój adres email ma co najmniej 4 znaki, i że twoje hasło ma co najmniej 6 znaków.',
    'input_maximum' => 'Upewnij się, że twoja nazwa użytkownika ma maksymalnie 20 znaków, a twój adres email i hasło mają maksymalnie 64 znaki.',
    'email_invalid' => 'Twój adres email jest nieprawidłowy.',
    'passwords_must_match' => 'Twoje hasła muszą być takie same.',
    'creating_admin_account' => 'Tworzenie konta administratora',
    'enter_admin_details' => 'Wprowadź dane konta administratora.',
    'username' => 'Nazwa użytkownika',
    'email_address' => 'Adres email',
    'password' => 'Hasło',
    'confirm_password' => 'Powtórz hasło',
    'upgrade' => 'Zaktualizuj',
    'input_v1_details' => 'Wpisz dane do twojej bazy danych używanej przy wersji Nameless v1.',
    'installer_upgrading_database' => 'Poczekaj, aż instalator zaktualizuje twoją bazę danych...',
    'errors_logged' => 'Błędy zostały zapisane. Kliknij przycisk Kontynuuj, aby kontynuować aktualizację.',
    'continue' => 'Kontunuuj',
    'convert' => 'Konwertuj',
    'convert_message' => 'Czy chcesz przekonwertować dane ze swojego starego silniku forum?',
    'yes' => 'Tak',
    'no' => 'Nie',
    'converter' => 'Konwerter',
    'back' => 'Powrót',
    'unable_to_load_converter' => 'Podczas ładowania konwertera wystąpił błąd!',
    'finish' => 'Zakończ',
    'finish_message' => 'Dziękujemy za zainstalowanie NamelessMC! Możesz teraz przejść do panelu administartora, gdzie możesz dalej konfigurować swoją stronę.',
    'support_message' => 'Jeśli potrzebujesz pomocy, sprawdź naszą stronę internetową <a href="https://namelessmc.com" target="_blank">tutaj</a>. Możesz też odwiedzić nasz<a href="https://discord.gg/9vk93VR" target="_blank">serwer Discord</a> lub nasze <a href="https://github.com/NamelessMC/Nameless/" target="_blank">repozytorium GitHub</a>.',
    'credits' => 'Podziękowania',
    'credits_message' => 'Podziękowania dla <a href="https://github.com/NamelessMC/Nameless#full-contributor-list" target="_blank">współtwórców NamelessMC</a> od 2014',

	'step_home' => 'Home',
	'step_requirements' => 'Requirements',
	'step_general_config' => 'General Configuration',
	'step_database_config' => 'Database Configuration',
	'step_site_config' => 'Site Configuration',
	'step_admin_account' => 'Admin Account',
	'step_conversion' => 'Conversion',
	'step_finish' => 'Finish',

	'general_configuration' => 'General Configuration',
	'reload' => 'Reload',
	'reload_page' => 'Reload page',
	'no_converters_available' => 'There are no converters available.',
	'config_not_writable' => 'The config file is not writable.',

	'session_doesnt_exist' => 'Unable to detect session. Sessions saving are a requirement to use Nameless. Please try again, and if the issue persists, please contact your web host for support.'
);
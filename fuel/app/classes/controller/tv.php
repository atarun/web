<?php

use Fuel\Core\Input;
class Controller_Tv extends Controller_Abstruct
{
	private $googleApiKey = 'AIzaSyBKDL4_qOHNfALM6y5w5iLlFE8wpaL0rYI';
	
	public function before() {
		parent::before();
	}
	
	public function after($response) {
		$response = parent::after($response);
		return $response;
	}
	
	public function action_index() {
		$this->view->hoge = 'hoge';
	}
	
	public function action_map() {
		$client = new \Google_Client();
		$client->setDeveloperKey($this->googleApiKey);
	
		$youtube = new Google_Service_YouTube($client);
	
		try {
			// Call the search.list method to retrieve results matching the specified
			// query term.
			$searchResponse = $youtube->search->listSearch('id,snippet', array(
					'q' => $_GET['q'],
					'maxResults' => $_GET['maxResults'],
			));
	
			$videos = '';
			$channels = '';
			$playlists = '';
	
			// Add each result to the appropriate list, and then display the lists of
			// matching videos, channels, and playlists.
			foreach ($searchResponse['items'] as $searchResult) {
				switch ($searchResult['id']['kind']) {
					case 'youtube#video':
						$videos .= sprintf('<li>%s (%s)</li>',
						$searchResult['snippet']['title'], $searchResult['id']['videoId']);
						break;
					case 'youtube#channel':
						$channels .= sprintf('<li>%s (%s)</li>',
						$searchResult['snippet']['title'], $searchResult['id']['channelId']);
						break;
					case 'youtube#playlist':
						$playlists .= sprintf('<li>%s (%s)</li>',
						$searchResult['snippet']['title'], $searchResult['id']['playlistId']);
						break;
				}
			}
			
			$this->view->videos = $videos;
			$this->view->channels = $channels;
			$this->view->playlists = $playlists;
		} catch (Google_Service_Exception $e) {
			$htmlBody = sprintf('<p>A service error occurred: <code>%s</code></p>',
					htmlspecialchars($e->getMessage()));
			echo $htmlBody;
			exit;
		} catch (Google_Exception $e) {
			$htmlBody = sprintf('<p>An client error occurred: <code>%s</code></p>',
					htmlspecialchars($e->getMessage()));
			echo $htmlBody;
			exit;
		}
	}
}
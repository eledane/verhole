<?php

	use Nette\Mail\Message;
	use Nette\Mail\SendmailMailer;

	class DataMailSender extends Nette\Object{

		private $from;
        private $template = '/mail.latte';

		public function __construct($from){
			$this->from = $from;
		}

        /**
         * @param $template String with mail template file: '/mail.latte'
         */
        public function setTemplate($template) {
            $this->template = $template;
        }

		public function sendData($to, $subject, $data){

			$date = new \DateTime('now');

			$params = Array(
				'from' => $this->from,
				'subject' => $subject,
				'data' => $data,
				'date' => $date
			);

			$latte = new Latte\Engine;
			if(!is_array($to)) {
				$to = array($to);
			}
			foreach ($to as $recipient) {
				$mail = new Message();
				$mail->setFrom($this->from)
					->addTo($recipient)
					->setSubject($subject)
					->setHtmlBody($latte->renderToString(__DIR__ . $this->template , $params));

				$mailer = new SendmailMailer;
				$mailer->send($mail);
			}

		}

	}
<?php

namespace backend\controllers;

use common\models\LoginForm;
use common\models\User;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\ForbiddenHttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return $this->isAdmin();
                        }
                    ],
                    [
                        // Базовое правило для всех остальных действий
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return $this->isAdmin();
                        }
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    if (Yii::$app->user->isGuest) {
                        return $this->redirect(['site/login']);
                    } else {
                        throw new ForbiddenHttpException('У вас нет доступа к этой странице.');
                    }
                }
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
                'view' => '@backend/views/site/error.php',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // Проверяем, является ли пользователь администратором
        if (!$this->isAdmin()) {
            Yii::$app->session->setFlash('error', 'Доступ в админ-панель только для администраторов.');
            return $this->redirect(['site/login']);
        }

        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        // Если пользователь уже авторизован
        if (!Yii::$app->user->isGuest) {
            // Проверяем, является ли он администратором
            if ($this->isAdmin()) {
                return $this->goHome();
            } else {
                Yii::$app->user->logout();
                Yii::$app->session->setFlash('error', 'Доступ в админ-панель только для администраторов.');
            }
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        
        // Загружаем данные и пытаемся войти
        if ($model->load(Yii::$app->request->post())) {
            // Проверяем логин/пароль
            if ($model->login()) {
                // Проверяем, является ли пользователь администратором
                if ($this->isAdmin()) {
                    Yii::$app->session->setFlash('success', 'Вы успешно вошли в админ-панель.');
                    return $this->goBack();
                } else {
                    // Если не админ - разлогиниваем и показываем ошибку
                    Yii::$app->user->logout();
                    $model->addError('password', 'Доступ в админ-панель только для администраторов.');
                    Yii::$app->session->setFlash('error', 'Доступ в админ-панель только для администраторов.');
                }
            } else {
                Yii::$app->session->setFlash('error', 'Неверное имя пользователя или пароль.');
            }
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        Yii::$app->session->setFlash('success', 'Вы успешно вышли из админ-панели.');
        return $this->goHome();
    }

    /**
     * Проверяет, является ли текущий пользователь администратором
     * @return bool
     */
    protected function isAdmin()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        
        $user = Yii::$app->user->identity;
        
        // Проверяем через поле role в модели User
        if ($user instanceof User) {
            return $user->isAdmin();
        }
        
        // Альтернативная проверка через RBAC
        return Yii::$app->user->can('admin') || Yii::$app->user->can('accessBackend');
    }

    /**
     * Действие для тестирования прав доступа
     * @return string
     */
    public function actionTest()
    {
        if (!$this->isAdmin()) {
            throw new ForbiddenHttpException('Доступ только для администраторов.');
        }
        
        return $this->render('test', [
            'message' => 'Вы успешно вошли как администратор!',
        ]);
    }

    /**
     * Информация о текущем пользователе
     * @return string
     */
    public function actionProfile()
    {
        if (!$this->isAdmin()) {
            throw new ForbiddenHttpException('Доступ только для администраторов.');
        }
        
        $user = Yii::$app->user->identity;
        
        return $this->render('profile', [
            'user' => $user,
        ]);
    }
}
<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PrivacyController extends Controller
{
    /**
     * Obtener configuración actual de privacidad
     */
    public function getPrivacySettings()
    {
        try {
            $user = Auth::user();

            // En producción, esto se consultaría de la base de datos
            $settings = $this->getMockPrivacySettings($user->id);

            return response()->json([
                'success' => true,
                'data' => $settings,
            ]);

        } catch (\Exception $e) {
            Log::error('privacy_controller_error', ['exception' => $e]);

            return response()->json([
                'success' => false,
                'message' => 'Error al obtener configuración',
                'error' => 'Error interno. Intenta de nuevo.',
            ], 500);
        }
    }

    /**
     * Actualizar configuración de privacidad
     */
    public function updatePrivacySettings(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'profile_visibility' => 'boolean',
                'order_history_visibility' => 'boolean',
                'activity_visibility' => 'boolean',
                'marketing_emails' => 'boolean',
                'push_notifications' => 'boolean',
                'location_sharing' => 'boolean',
                'data_analytics' => 'boolean',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Datos de entrada inválidos',
                    'errors' => $validator->errors(),
                ], 422);
            }

            $user = Auth::user();
            $updates = $request->only([
                'profile_visibility',
                'order_history_visibility',
                'activity_visibility',
                'marketing_emails',
                'push_notifications',
                'location_sharing',
                'data_analytics',
            ]);

            // En producción, esto se guardaría en la base de datos
            $updatedSettings = $this->updateMockPrivacySettings($user->id, $updates);

            return response()->json([
                'success' => true,
                'message' => 'Configuración actualizada correctamente',
                'data' => $updatedSettings,
            ]);

        } catch (\Exception $e) {
            Log::error('privacy_controller_error', ['exception' => $e]);

            return response()->json([
                'success' => false,
                'message' => 'Error al actualizar configuración',
                'error' => 'Error interno. Intenta de nuevo.',
            ], 500);
        }
    }

    /**
     * Obtener política de privacidad
     */
    public function getPrivacyPolicy()
    {
        try {
            $policy = [
                'version' => '1.0',
                'last_updated' => '2024-01-01',
                'content' => $this->getPrivacyPolicyContent(),
            ];

            return response()->json([
                'success' => true,
                'data' => $policy,
            ]);

        } catch (\Exception $e) {
            Log::error('privacy_controller_error', ['exception' => $e]);

            return response()->json([
                'success' => false,
                'message' => 'Error al obtener política',
                'error' => 'Error interno. Intenta de nuevo.',
            ], 500);
        }
    }

    /**
     * Obtener términos de servicio
     */
    public function getTermsOfService()
    {
        try {
            $terms = [
                'version' => '1.0',
                'last_updated' => '2024-01-01',
                'content' => $this->getTermsOfServiceContent(),
            ];

            return response()->json([
                'success' => true,
                'data' => $terms,
            ]);

        } catch (\Exception $e) {
            Log::error('privacy_controller_error', ['exception' => $e]);

            return response()->json([
                'success' => false,
                'message' => 'Error al obtener términos',
                'error' => 'Error interno. Intenta de nuevo.',
            ], 500);
        }
    }

    /**
     * Obtener configuración mock de privacidad
     */
    private function getMockPrivacySettings(string|int $userId)
    {
        return [
            'user_id' => $userId,
            'profile_visibility' => true,
            'order_history_visibility' => false,
            'activity_visibility' => true,
            'marketing_emails' => true,
            'push_notifications' => true,
            'location_sharing' => false,
            'data_analytics' => true,
            'created_at' => now()->subDays(30)->toISOString(),
            'updated_at' => now()->toISOString(),
        ];
    }

    /**
     * Actualizar configuración mock de privacidad
     */
    private function updateMockPrivacySettings(string|int $userId, array $updates)
    {
        $currentSettings = $this->getMockPrivacySettings($userId);

        foreach ($updates as $key => $value) {
            if (array_key_exists($key, $currentSettings)) {
                $currentSettings[$key] = $value;
            }
        }

        $currentSettings['updated_at'] = now()->toISOString();

        return $currentSettings;
    }

    /**
     * Contenido de la política de privacidad
     */
    private function getPrivacyPolicyContent()
    {
        return '
        <h1>Política de Privacidad</h1>
        
        <h2>1. Información que recopilamos</h2>
        <p>Recopilamos información que nos proporcionas directamente, como cuando creas una cuenta, realizas un pedido o te pones en contacto con nosotros.</p>
        
        <h2>2. Cómo utilizamos tu información</h2>
        <p>Utilizamos la información que recopilamos para:</p>
        <ul>
            <li>Procesar y gestionar tus pedidos</li>
            <li>Comunicarnos contigo sobre tu cuenta y pedidos</li>
            <li>Enviarte información sobre productos y servicios</li>
            <li>Mejorar nuestros servicios</li>
        </ul>
        
        <h2>3. Cómo compartimos tu información</h2>
        <p>No vendemos, alquilamos ni compartimos tu información personal con terceros, excepto en las siguientes circunstancias:</p>
        <ul>
            <li>Con tu consentimiento explícito</li>
            <li>Para cumplir con obligaciones legales</li>
            <li>Para proteger nuestros derechos y seguridad</li>
        </ul>
        
        <h2>4. Tus derechos</h2>
        <p>Tienes derecho a:</p>
        <ul>
            <li>Acceder a tu información personal</li>
            <li>Corregir información inexacta</li>
            <li>Solicitar la eliminación de tus datos</li>
            <li>Oponerte al procesamiento de tus datos</li>
        </ul>
        
        <h2>5. Seguridad</h2>
        <p>Implementamos medidas de seguridad técnicas y organizativas apropiadas para proteger tu información personal.</p>
        
        <h2>6. Datos de salud</h2>
        <p>Si subes recetas médicas o información sobre alergias y condiciones, esos datos se consideran sensibles y se almacenan cifrados, con acceso limitado al farmacéutico responsable de la farmacia despachadora y al equipo autorizado de Zonix Pharma.</p>

        <h2>7. Contacto</h2>
        <p>Si tienes preguntas sobre esta política de privacidad, contáctanos en privacy@zonixpharma.com</p>
        ';
    }

    /**
     * Contenido de los términos de servicio
     */
    private function getTermsOfServiceContent()
    {
        return '
        <h1>Términos de Servicio</h1>
        
        <h2>1. Aceptación de los términos</h2>
        <p>Al utilizar nuestros servicios, aceptas estar sujeto a estos términos de servicio.</p>
        
        <h2>2. Descripción del servicio</h2>
        <p>Zonix Pharma es una plataforma que conecta usuarios con farmacias y droguerías para la venta y entrega de medicamentos OTC, productos de farmacia y, cuando corresponde, medicamentos bajo prescripción médica (Rx) validados por farmacéutico colegiado.</p>

        <h2>3. Cuenta de usuario</h2>
        <p>Eres responsable de mantener la confidencialidad de tu cuenta y contraseña.</p>

        <h2>4. Uso aceptable</h2>
        <p>Te comprometes a usar nuestros servicios solo para fines legales y de acuerdo con estos términos. La compra de medicamentos Rx requiere la presentación de una receta médica vigente emitida por un profesional habilitado.</p>

        <h2>5. Pedidos y pagos</h2>
        <p>Los precios mostrados incluyen todos los impuestos aplicables. Los pagos se procesan según los métodos habilitados por cada farmacia (pago móvil, transferencia, Zelle, Binance Pay, efectivo, tarjeta).</p>

        <h2>6. Entrega y retiro</h2>
        <p>Nos esforzamos por entregar los pedidos en el tiempo estimado. Para ciertos medicamentos controlados o de cadena de frío puede ser obligatorio el retiro en farmacia con verificación física de receta o documento de identidad.</p>

        <h2>7. Cancelaciones y reembolsos</h2>
        <p>Las políticas de cancelación y reembolso varían según la farmacia y la naturaleza del producto. Los medicamentos Rx ya despachados no son retornables, salvo defecto del producto.</p>

        <h2>8. Limitación de responsabilidad</h2>
        <p>Nuestra responsabilidad está limitada al monto pagado por el servicio. Zonix Pharma no sustituye la consulta médica ni la indicación profesional del farmacéutico.</p>

        <h2>9. Modificaciones</h2>
        <p>Nos reservamos el derecho de modificar estos términos en cualquier momento.</p>

        <h2>10. Contacto</h2>
        <p>Para preguntas sobre estos términos, contáctanos en legal@zonixpharma.com</p>
        ';
    }
}
